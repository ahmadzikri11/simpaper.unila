<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp;
use Illuminate\Support\Facades\Mail;
use DataTables;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('transaction.user_transaction', compact('user'));
    }

    public function Status()
    {

        $user = Auth::user();
        $get_id = $user->id;
        $check = Transaction::where('user_id', $get_id)->exists();

        if ($check) {
            return view('transaction.edit_transaction', compact('user',));
        } else {
            return view('transaction.status_submit');
        }
    }

    public function listRequest(Request $request)
    {
        if ($request->ajax()) {
            $data = Transaction::with('transactions');

            return DataTables::eloquent($data)

                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    if (empty($row->transactions['name'])) {
                        $row = ' ';
                    } else {
                        return $row->transactions['name'];
                    }
                })
                ->addColumn('fakultas', function ($row) {
                    if (empty($row->transactions->getfakultas['fakultas'])) {
                        $row = ' ';
                    } else {
                        return $row->transactions->getfakultas['fakultas'];
                    }
                })
                ->addColumn('prodi', function ($row) {
                    if (empty($row->transactions->getprodi['prodi'])) {
                        $row = ' ';
                    } else {
                        return $row->transactions->getprodi['prodi'];
                    }
                })
                ->addColumn('action', function ($row) {
                    // $actionBtn = '<a href="/dashboard/list/account/editaccount{id}' . $user->id . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    $actionBtn = '<a href="/dashboard/validation/' . $row->id . '" " class="edit h-8 btn bg-green-500 text-white btn-sm">Validasi</a> ';

                    return $actionBtn;
                })
                ->editColumn('created_at', function ($row) {
                    //change over here
                    return date('d-m-Y', strtotime($row->created_at));
                })
                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('fakultas'))) {
                        $instance->wherehas('transactions', function ($w) use ($request) {
                            $get = $request->get('fakultas');
                            $w->Where('fakultas_id', 'LIKE', "%$get%");
                        });
                    }
                    if (!empty($request->get('validasi'))) {
                        $instance->where(function ($w) use ($request) {
                            $get = $request->get('validasi');
                            $w->Where('status', 'LIKE', "%$get%");
                        });
                    }
                    if (!empty($request->get('periode_wisuda'))) {
                        $instance->where(function ($w) use ($request) {
                            $get = $request->get('periode_wisuda');
                            $w->Where('periode_wisuda', 'LIKE', "%$get%");
                        });
                    }
                    if (!empty($request->get('tahun_wisuda'))) {
                        $instance->where(function ($w) use ($request) {
                            $get = $request->get('tahun_wisuda');
                            $w->Where('tahun_wisuda', 'LIKE', "%$get%");
                        });
                    }
                    if (!empty($request->get('search'))) {
                        $instance->wherehas('transactions', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('name', 'LIKE', "%$get%");
                        })->orWhere(function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->orWhere('periode_wisuda', 'LIKE', "%$get%");
                            $w->orWhere('tahun_wisuda', 'LIKE', "%$get%");
                            $w->orWhere('created_at', 'LIKE', "%$get%");
                            $w->orWhere('status', 'LIKE', "%$get%");
                        })->orWherehas('transactions.getfakultas', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('fakultas', 'LIKE', "%$get%");
                        })->orWherehas('transactions.getprodi', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('prodi', 'LIKE', "%$get%");
                        });
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        $transaction = Transaction::paginate(10);
        return view('transaction.list-transaction', compact('transaction'));
    }
    public function validation($id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.validation', compact('transaction'));
    }

    public function showFile1($path)
    {
        $file = public_path('storage' . '/' . $path);
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $path . '"'
        ];
        return response()->file($file, $header);
    }
    public function showFile2($path2)
    {
        $file = public_path('storage' . '/' . $path2);
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $path2 . '"'
        ];
        return response()->file($file, $header);
    }
    public function showFile3($path3)
    {
        $file = public_path('storage' . '/' . $path3);
        $header = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $path3 . '"'
        ];
        return response()->file($file, $header);
    }

    public function validationAccept(Request $request, Transaction $transaction, User $user, $id)
    {

        $this->validate($request, [
            'status' => 'required',
            'message' => 'required',
        ]);

        $transaction = Transaction::find($id);

        $transaction->update([
            'status' => $request['status'],
        ]);
        $phone = $transaction->transactions->phone;
        $email = $transaction->transactions->email;

        $message = $request['message'];
        $client = new Client();

        $url = "https://app.whatspie.com/api/messages";

        $request = $client->post(
            $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Bearer ' . 'uTusgUQmz2vRHtmU4Q8FIcHKV79fhjTifmhxAfjzHZDptUVaOP'
                ],
                'form_params' => [
                    'receiver' => $phone,
                    'device' => '62816514372',
                    'message' => $message,
                    'type' => 'chat'
                ]
            ]
        );
        $details = [
            'title' => 'UPT Perpustakaan Unila',
            'body' => $message
        ];

        \Mail::to($email)->send(new \App\Mail\MyMail($details));
        return redirect()->route('request.list')->with('message', ' Data telah Divalidasi!');
    }

    public function validationreject(Request $request, Transaction $transaction, $id)
    {
        $this->validate($request, [
            'status' => 'required',
            'message' => 'required',
        ]);

        $transaction = Transaction::find($id);

        $transaction->update([
            'status' => $request['status'],
        ]);


        $phone = $transaction->transactions->phone;

        $message = $request['message'];
        $client = new Client();

        $url = "https://app.whatspie.com/api/messages";

        $request = $client->post(
            $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Bearer ' . 'uTusgUQmz2vRHtmU4Q8FIcHKV79fhjTifmhxAfjzHZDptUVaOP'
                ],
                'form_params' => [
                    'receiver' => $phone,
                    'device' => '62816514372',
                    'message' => $message,
                    'type' => 'chat'
                ]
            ]
        );

        return redirect()->route('request.list')->with('reject', ' Data tidak Divalidasi!');
    }


    public function message($phone)
    {

        $client = new Client();

        $url = "https://app.whatspie.com/api/messages";

        $request = $client->post(
            $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Bearer ' . 'uTusgUQmz2vRHtmU4Q8FIcHKV79fhjTifmhxAfjzHZDptUVaOP'
                ],
                'form_params' => [
                    'receiver' => $phone,
                    'device' => '62816514372',
                    'message' => 'cobaa',
                    'type' => 'chat'
                ]
            ]
        );
    }


    public function create(Request $request)
    {

        $a = Str::random(6);
        // dd($a);
        $attr = $request->validate([
            'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file3' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'token' => 'required',
            'periode_wisuda' => 'required',
            'tahun_wisuda' => 'required',
            'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        ]);

        $attr['user_id'] = auth()->user()->id;
        $attr['file1'] = $this->storeFile($request->file('file1'), 'surat-rekomendasi');
        $attr['file2'] = $this->storeFile($request->file('file2'), 'surat-keterangan');
        $attr['file3'] = $this->storeFile($request->file('file3'), 'sk');
        $attr['ktm'] = $this->storeFile($request->file('ktm'), 'ktm');
        $attr['photo'] = $this->storeFile($request->file('photo'), 'photo');
        $attr['token'] = $a;
        Transaction::create($attr);

        return redirect()->route('transcation.status')->with('message', ' Data telah Telah Terkirim!');
    }
    public function update(Request $request, $id)
    {
        $post = Transaction::find($id);

        $request->validate([
            // 'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'file3' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            // 'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'token' => 'required',
            'periode_wisuda' => 'required',
            'tahun_wisuda' => 'required',
        ]);
        $post->update([
            'token' => $request['token'],
            'periode_wisuda' => $request['periode_wisuda'],
            'tahun_wisuda' => $request['tahun_wisuda'],
        ]);
        $pathfile1 = $request->file('file1')->store('public/storage/files/surat-rekomendasi');
        $pathfile2 = $request->file('file2')->store('public/storage/files/surat-keterangan');
        $pathfile3 = $request->file('file3')->store('public/storage/files/sk');
        $pathktm = $request->file('ktm')->store('public/storage/files/ktm');
        $pathphoto = $request->file('photo')->store('public/storage/files/photo');
        // $token = $request['token'];
        // $periode_wisuda = $request['periode_wisuda'];
        // $tahun_wisuda = $request['tahun_wisuda'];

        $post->file1 = $pathfile1;
        $post->file2 = $pathfile2;
        $post->file3 = $pathfile3;
        $post->ktm = $pathktm;
        $post->photo = $pathphoto;
        // $post->token = $token;
        // $post->periode_wisuda = $periode_wisuda;
        // $post->tahun_wisuda = $tahun_wisuda;




        // $post->title = $request->title;
        // $post->description = $request->description;
        $post->save();

        return back()->with('message', 'Data berhasil ditambahkan');
    }

    public function downloadFile1(Request $request)
    {
        $attr = $request->validate([
            'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file3' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'token' => 'required',
            'periode_wisuda' => 'required',
        ]);

        $attr['user_id'] = auth()->user()->id;
        $attr['file1'] = $this->storeFile($request->file('file1'), 'surat-rekomendasi');
        $attr['file2'] = $this->storeFile($request->file('file2'), 'surat-keterangan');
        $attr['file3'] = $this->storeFile($request->file('file3'), 'sk');

        Transaction::create($attr);

        return back()->with('message', 'Data berhasil ditambahkan');
    }

    public function destroy(Transaction $transaction, $id)
    {
        $transaction = Transaction::find($id);
        $transaction->delete();
        return redirect()->route('request.list')->with('delete', ' Data telah Dihapus!');
    }
}
