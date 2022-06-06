<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ImportUser;
use App\Models\Repository;


class UserController extends Controller
{
    // upload profile user
    public function UpdateUserProfile(Request $request, User $user, $id)
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

        return redirect()->route('profile')->with('success', ' Data telah diperbaharui!');
    }


    //create transaction
    public function CreateUserTransaction(Request $request)
    {
        $attr = $request->validate([
            'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file3' => 'nullable|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        ]);
        $attr['user_id'] = auth()->user()->id;
        $attr['file1'] = $request->file('file1')->store(
            'surat_layak_upload',
            'public'
        );
        $attr['file2'] = $request->file('file2')->store(
            'surat_bebas_perpus',
            'public'
        );
        if ($request->file('file3') == null) {
            $attr['file3'] = "";
        } else {
            $attr['file3'] = $request->file('file3')->store(
                'Bukti_Sebar_Karya_Akhir',
                'public'
            );
        }

        // $attr['file3'] = $request->file('file3')->store(
        //     'Bukti_Sebar_Karya_Akhir',
        //     'public'
        // );

        $attr['ktm'] = $request->file('ktm')->store(
            'ktm',
            'public'
        );
        $attr['photo'] = $request->file('photo')->store(
            'photo',
            'public'
        );


        Transaction::create($attr);
        return redirect()->route('transcation.status')->with('message', ' Data  Telah Terkirim!');
    }

    // Update Transaction
    public function UpdateUserTransaction(Request $request, $id)
    {
        $post = Transaction::find($id);

        $attr = $request->validate([
            'file1' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file2' => 'required|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'file3' => 'nullable|mimes:csv,txt,xlx,xls,pdf|max:2048',
            'photo' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
            'ktm' => 'required|mimes:pdf,jpg,jpeg,png,jfif|max:2048',
        ]);

        $path = public_path() . '/storage/';
        if ($post->file1 != ''  && $post->file1 != null) {
            $file_old = $path . $post->file1;
            // dd($file_old);
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

        $attr['file1'] = $request->file('file1')->store(
            'surat_layak_upload',
            'public'
        );
        $attr['file2'] = $request->file('file2')->store(
            'surat_bebas_perpus',
            'public'
        );

        if ($request->file('file3') == null) {
            $attr['file3'] = "";
        } else {
            $attr['file1'] = $request->file('file3')->store('Bukti_Sebar_Karya_Akhir', 'public');
        }

        $attr['ktm'] = $request->file('ktm')->store('ktm', 'public');
        $attr['photo'] = $request->file('photo')->store('photo', 'public');
        $post->status = 'Telah Diperbaiki';
        $post->update($attr);
        $post->save();

        return back()->with('message', 'Data berhasil Diubah');
    }

    // Create Repository
    // public function CreateUserRepository(Request $request)
    // {
    //     $user = Auth::user()->id;
    //     $attr = $request->validate([
    //         'link_repository' => 'required',
    //     ]);
    //     $attr['user_id'] = $user;
    //     Repository::create($attr);
    //     return redirect()->route('get_repository')->with('message', ' Data telah diperbaharui!');
    // }

    // Update Repository
    public function UpdateUserRepository(Request $request, $id)
    {
        $update = Transaction::find($id);
        // dd($update);
        $attr = $request->validate([
            'link_repository' => 'required',
        ]);

        $update->status = 'Telah Upload Digilib';
        $update->update($attr);
        return redirect()->route('get_repository')->with('message', ' Data telah diperbaharui!');
    }

    public function dashboarduser()
    {
        $user = User::count();
        $transaction = Transaction::count();
        $transactionaccept = Transaction::where('status', 'Sudah Tervalidasi')->count();
        $transactionproses = Transaction::where('status', 'Diproses')->count();
        return view('dashboard', compact('user', 'transaction', 'transactionaccept', 'transactionproses'));
    }

    // public function editAccount($id)
    // {
    //     $user = User::find($id);
    //     $fakultas = Fakultas::all();
    //     return view('transaction.edit-account', compact('user', 'fakultas'));
    // }
    // public function updateAccount(Request $request, User $user, $id)
    // {
    //     $this->validate($request, [
    //         'name' => 'required',
    //         'npm' => 'required',
    //         'phone' => 'required',
    //         'email' => 'required',
    //         'fakultas' => 'required',
    //         'prodi' => 'required',
    //     ]);

    //     $user = User::find($id);

    //     $user->update([
    //         'name' => $request['name'],
    //         'email' => $request['email'],
    //         'npm' => $request['npm'],
    //         'phone' => $request['phone'],
    //         'fakultas_id' => $request['fakultas'],
    //         'prodi_id' => $request['prodi'],
    //     ]);

    //     return redirect()->route('account.list')->with('edit', ' Data telah diperbaharui!');
    // }




    public function destroy(User $user, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('account.list')->with('delete', ' Data telah Dihapus!');
    }

    public function getprodi(Request $request)
    {
        $prodi = Prodi::where("fakultas_id", $request->kabID)->pluck('id', 'prodi');
        return response()->json($prodi);
    }

    public function importUser(Request $request)
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


    public function AdminViewRepository()
    {
        $user = Repository::all();
        return view('transaction.validation-repository', compact('user'));
    }
}
// testing
