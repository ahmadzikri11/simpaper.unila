<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $user = Auth::user();
    //     $a = $user->id;
    //     $ceck_transaction = Transaction::where('user_id', $a)->exists();
    //     if ($ceck_transaction) {
    //         return view('transaction.edit_transaction', compact('user'));
    //     } else {
    //         return view('transaction.user_transaction', compact('user'));
    //     }
    // }

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
}
