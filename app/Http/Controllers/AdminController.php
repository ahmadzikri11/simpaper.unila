<?php

namespace App\Http\Controllers;

use App\Imports\ImportUser;
use App\Models\Fakultas;
use App\Models\Transaction;
use App\Models\Repository;
use App\Models\User;
use Carbon\Carbon;
use DateTime;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel as ExcelExcel;
use Maatwebsite\Excel\Facades\Excel;
use PhpOffice\PhpSpreadsheet\Calculation\TextData\Format;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function UpdateAdminProfile(Request $request, User $user, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',

        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
        ]);
        return redirect()->route('profile_admin')->with('success', ' Data telah diperbaharui!');
    }

    public function ImportUser(Request $request)
    {
        $this->validate($request, [
            'file_user' => 'required',
        ]);
        $path = public_path('storage/user');
        $fileuser = $request->file('file_user');
        $name = $fileuser->getClientOriginalName() . '.' . $fileuser->getClientOriginalExtension();
        $fileuser->move($path, $name);
        $filename = $path . '/' . $name;
        Excel::import(new ImportUser, $filename);
        return redirect()->back()->with('success', ' User telah ditambahkan!');
    }



    public function EditAccountAdmin($id)
    {
        $user = User::find($id);
        $fakultas = Fakultas::all();
        return view('transaction.edit-account', compact('user', 'fakultas'));
    }


    public function UpdateAccount(Request $request, User $user, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'npm' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'fakultas' => 'required',
            'prodi' => 'required',
        ]);

        $user = User::find($id);

        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'npm' => $request['npm'],
            'phone' => $request['phone'],
            'fakultas_id' => $request['fakultas'],
            'prodi_id' => $request['prodi'],
        ]);

        return redirect()->route('account.list')->with('edit', ' Data telah diperbaharui!');
    }




    public function ValidationTransaction(Request $request, Transaction $transaction, User $user, $id)
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
            $filename = public_path('Dokumentasi Sistem Perpus.pdf');
        }
        $transaction = Transaction::find($id);
        $message = $request['message'];

        $transaction->update([
            'status' => $request['status'],
        ]);

        $date = date("d M Y");

        $transaction->validator = auth()->user()->name . ', ' . $date;
        $transaction->message = $request['message'];
        $transaction->save();
        $phone = $transaction->transactions->phone;
        $email = $transaction->transactions->email;

        $client = new Client();

        $url = "https://app.whatspie.com/api/messages";

        $request = $client->post(
            $url,
            [
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Bearer ' . 'dILnerPytl0wC1Psjs19uQUG8CgbGP6tCZXjAhnzbdpQDrlUpB'
                ],
                'form_params' => [
                    'receiver' => $phone,
                    'device' => '6281276972110',
                    'message' => $message,
                    'type' => 'chat'
                ]
            ]
        );
        $details = [
            'title' => 'UPT Perpustakaan Unila',
            'body' => $message,
        ];

        \Mail::to($email)->send(new \App\Mail\MyMail($details, $filename));
        return redirect()->route('request.list')->with('message', ' Data telah Divalidasi!');
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

    public function ResetPassword(Request $request, User $user, $id)
    {
        $user = User::find($id);
        $user->update([
            'password' => bcrypt('simpaper'),
        ]);

        return redirect()->route('account.list')->with('edit', ' Password Telah Dirubah!');
    }





    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
