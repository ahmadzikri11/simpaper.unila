<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use SebastianBergmann\Environment\Console;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:admin');
    // }

    public function dashboarduser()
    {
        $user = User::count();
        $transaction = Transaction::count();
        $transactionaccept = Transaction::where('status', 'Sudah Tervalidasi')->count();
        $transactionproses = Transaction::where('status', 'Diproses')->count();
        return view('dashboard', compact('user', 'transaction', 'transactionaccept', 'transactionproses'));
    }
    public function listaccount()
    {
        $user = User::paginate(10);
        return view('transaction.list-account', compact('user'));
    }


    public function editAccount($id)
    {
        $user = User::find($id);
        $fakultas = Fakultas::all();
        return view('transaction.edit-account', compact('user', 'fakultas'));
    }
    public function updateAccount(Request $request, User $user, $id)
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
    public function index()
    {
        $user = Auth::user();
        $fakultas = Fakultas::all();
        $prodi = Prodi::all();
        return view('profile', compact('user', 'fakultas', 'prodi'));
    }

    public function update(Request $request, User $user, $id)
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
}
