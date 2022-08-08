<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;


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

    // public function downloadStorage (Request $pathSkbp)
    // {
    //     if (Storage::(disk('public')->exists("app/public/ktmm/"))) {
    //       $path = Storage::disk('public')->path("app/public/ktmm/");
    //       $content = file_get_contents($path);
    //       return response($content)->withHeaders([
    //         'content-Type' => mime_content_type($path)
    //       ]);
    //     }
    //     return redirect('/404');
    //     }

    public function downloadStorage(Request $req){
        // return Storage::download($req->pathfile);
        $filename = 'app/public/'.$req->pathfile;
        $path = storage_path($filename);
        // dd($path);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }

    public function downloadStorage2(Request $req2){
        // return Storage::download($req->pathfile);
        $filename2 = 'app/public/'.$req2->pathfile2;
        $path = storage_path($filename2);
        return Response::make(file_get_contents($path), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename2.'"'
        ]);
    }
}
