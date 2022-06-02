<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Repository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp;
use Illuminate\Support\Facades\Mail;
use DataTables;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules\Exists;

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
        $a = $user->id;
        $ceck_transaction = Transaction::where('user_id', $a)->exists();
        if ($ceck_transaction) {
            return view('transaction.edit_transaction', compact('user'));
        } else {
            return view('transaction.user_transaction', compact('user'));
        }
    }

    public function Status()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = Transaction::where('user_id', $get_id)->exists();

        if ($check) {
            return view('transaction.edit_transaction', compact('user'));
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
    public function ViewAdminRepository($id)
    {
        $repository = Repository::find($id);
        return view('transaction.validation-digilib', compact('repository'));
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
    // va

    public function validationAccept(Request $request, Transaction $transaction, User $user, $id)
    {

        $this->validate($request, [
            'status' => 'required',
            'message' => 'required',
            'attachment' => 'nullable',
        ]);


        if ($request->has('attachment')) {

            $path = public_path('tanda_terima');
            $attachment = $request->file('attachment');
            $name = time() . '.' . $attachment->getClientOriginalExtension();
            if (!Transaction::exists($path)) {
                Transaction::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path . '/' . $name;
        } else {
            $filename = public_path('storage/unila.png');
        }
        $transaction = Transaction::find($id);
        $message = $request['message'];

        $transaction->update([
            'status' => $request['status'],
        ]);



        $transaction->validator = auth()->user()->name;
        $transaction->message = $request['message'];
        $transaction->save();
        $phone = $transaction->transactions->phone;
        $email = $transaction->transactions->email;

        // $client = new Client();

        // $url = "https://app.whatspie.com/api/messages";

        // $request = $client->post(
        //     $url,
        //     [
        //         'headers' => [
        //             'Accept' => 'application/json',
        //             'Content-Type' => 'application/x-www-form-urlencoded',
        //             'Authorization' => 'Bearer ' . 'uTusgUQmz2vRHtmU4Q8FIcHKV79fhjTifmhxAfjzHZDptUVaOP'
        //         ],
        //         'form_params' => [
        //             'receiver' => $phone,
        //             'device' => '62816514372',
        //             'message' => $message,
        //             'type' => 'chat'
        //         ]
        //     ]
        // );
        $details = [
            'title' => 'UPT Perpustakaan Unila',
            'body' => $message,
        ];

        \Mail::to($email)->send(new \App\Mail\MyMail($details, $filename));
        return redirect()->route('request.list')->with('message', ' Data telah Divalidasi!');
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

        // $a = Str::random(6);
        // dd($a);
        $attr = $request->validate([
            'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file3' => 'nullable|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'file4' => 'nullable|mimes:csv,txt,xlx,xls,pdf|max:2048',
            // 'periode_wisuda' => 'required',
            // 'tahun_wisuda' => 'required',
            'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        ]);


        $attr['user_id'] = auth()->user()->id;
        $attr['file1'] = $this->storeFile($request->file('file1'), 'surat_layak_upload');
        $attr['file2'] = $this->storeFile($request->file('file2'), 'surat_bebas_perpus');
        $attr['file3'] = $this->storeFile($request->file('file3'), 'Bukti_Sebar_Karya_Akhir');
        // $attr['file4'] = $this->storeFile($request->file('file4'), 'bukti_pembayaran_karya_ilmiah');
        $attr['ktm'] = $this->storeFile($request->file('ktm'), 'ktm');
        $attr['photo'] = $this->storeFile($request->file('photo'), 'photo');
        // $attr['token'] = $a;
        Transaction::create($attr);

        return redirect()->route('transcation.status')->with('message', ' Data telah Telah Terkirim!');
    }
    public function update(Request $request, $id)
    {
        $post = Transaction::find($id);

        // $request->validate([
        //     'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        //     'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        //     'file3' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
        //     'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        //     'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        //     'token' => 'required',
        //     'periode_wisuda' => 'required',
        //     'tahun_wisuda' => 'required',
        // ]);
        // $post->update([
        //     'token' => $request['token'],
        //     'periode_wisuda' => $request['periode_wisuda'],
        //     'tahun_wisuda' => $request['tahun_wisuda'],
        // ]);

        $path = public_path() . '/storage/';
        if ($post->file1 != ''  && $post->file1 != null) {
            $file_old = $path . $post->file1;
            unlink($file_old);
        }
        if ($post->file2 != ''  && $post->file2 != null) {
            $file_old = $path . $post->file2;
            unlink($file_old);
        }
        if ($post->file3 != ''  && $post->file3 != null) {
            $file_old = $path . $post->file3;
            unlink($file_old);
        }

        if ($post->photo != ''  && $post->photo != null) {
            $file_old = $path . $post->photo;
            unlink($file_old);
        }
        if ($post->ktm != ''  && $post->ktm != null) {
            $file_old = $path . $post->ktm;
            unlink($file_old);
        }

        $pathfile1 = $request->file('file1')->store('files/surat_layak_upload');
        $pathfile2 = $request->file('file2')->store('files/surat_bebas_perpus');
        $pathfile3 = $request->file('file3')->store('files/Bukti_Sebar_Karya_Akhir');
        // $pathfile4 = $request->file('file4')->store('files/bukti_pembayaran_karya_ilmiah');
        $pathktm = $request->file('ktm')->store('files/ktm');
        $pathphoto = $request->file('photo')->store('files/photo');


        $post->file1 = $pathfile1;
        $post->file2 = $pathfile2;
        $post->file3 = $pathfile3;
        // $post->file4 = $pathfile4;
        $post->ktm = $pathktm;
        $post->photo = $pathphoto;

        $post->save();

        return back()->with('message', 'Data berhasil Diubah');
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

    public function updatePeriode(Request $request, $id)
    {

        $post = Transaction::find($id);
        $get = $request->validate([
            'periode_wisuda' => 'required',
            'tahun_wisuda' => 'required',
        ]);
        $post->update($get);
        // Transaction::update($post);
        return back()->with('message', 'Data berhasil ditambahkan');
    }
    public function CreateRepository(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'link_repository' => 'required',
            'user_id' => 'nullable',
        ]);
        $attr['user_id'] = $user;
        // dd($attr);

        Repository::create($attr);
        return redirect()->route('get_repository')->with('message', ' Data telah diperbaharui!');
    }

    public function UpdateRepository(Request $request, $id)
    {
        $update = Repository::find($id);
        $attr = $request->validate([
            'link_repository' => 'required',
        ]);
        $update->update($attr);
        return redirect()->route('get_repository')->with('message', ' Data telah diperbaharui!');
    }
    public function validationRepository(Request $request, Repository $repository, User $user, $id)
    {

        $this->validate($request, [
            'status' => 'required',
            'message' => 'nullable',
            'attachment' => 'nullable',
        ]);


        if ($request->has('attachment')) {

            $path = public_path('tanda_terima');
            $attachment = $request->file('attachment');
            $name = time() . '.' . $attachment->getClientOriginalExtension();
            if (!Transaction::exists($path)) {
                Transaction::makeDirectory($path, $mode = 0777, true, true);
            }
            $attachment->move($path, $name);

            $filename = $path . '/' . $name;
        } else {
            $filename = public_path('storage/unila.png');
        }

        $repository = Repository::find($id);
        $message = $request['message'];

        $repository->update([
            'status' => $request['status'],
        ]);
        $repository->validator = auth()->user()->name;
        // $repository->message = $request['message'];
        $repository->save();
        $phone = $repository->getuserrepo->phone;
        $email = $repository->getuserrepo->email;

        // $client = new Client();

        // $url = "https://app.whatspie.com/api/messages";

        // $request = $client->post(
        //     $url,
        //     [
        //         'headers' => [
        //             'Accept' => 'application/json',
        //             'Content-Type' => 'application/x-www-form-urlencoded',
        //             'Authorization' => 'Bearer ' . 'uTusgUQmz2vRHtmU4Q8FIcHKV79fhjTifmhxAfjzHZDptUVaOP'
        //         ],
        //         'form_params' => [
        //             'receiver' => $phone,
        //             'device' => '62816514372',
        //             'message' => $message,
        //             'type' => 'chat'
        //         ]
        //     ]
        // );
        $details = [
            'title' => 'UPT Perpustakaan Unila',
            'body' => $message,
        ];

        \Mail::to($email)->send(new \App\Mail\MyMail($details, $filename));
        return redirect()->route('view_repository')->with('message', ' Data telah Divalidasi!');
    }
}
