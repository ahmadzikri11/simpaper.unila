<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Repository;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Illuminate\Support\Facades\Auth;

class ViewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    //  user Views Controller
    public function UserProfileUpdate()
    {
        $user = Auth::user();
        $fakultas = Fakultas::all();
        $prodi = Prodi::all();
        return view('profile', compact('user', 'fakultas', 'prodi'));
    }
    public function UserSubmission()
    {
        $user = Auth::user();
        $a = $user->id;

        $check_transaction = Transaction::where('user_id', $a)->exists();
        if ($check_transaction) {
            return view('transaction.edit_transaction', compact('user'));
        } else {
            return view('transaction.user_transaction', compact('user'));
        }
    }
    public function UserRepository()
    {
        $user = Auth::user();
        $get_id = $user->id;
        $check = Transaction::where('user_id', $get_id)->exists();
        if ($check) {
            return view('transaction.edit-repository', compact('user'));
        } else {
            return view('transaction.view-repository', compact('user'));
        }
    }


    // Admin Views Controller

    public function ListAccount(Request $request)
    {
        $data = User::with('getfakultas', 'getprodi');
        if ($request->ajax()) {

            return DataTables::eloquent($data)

                ->addIndexColumn()
                ->addColumn('getfakultas', function ($row) {
                    if (empty($row->getfakultas['fakultas'])) {
                        $row = '';
                    } else {
                        return $row->getfakultas['fakultas'];
                    }
                })
                ->addColumn('getprodi', function ($row) {
                    if (empty($row->getprodi['prodi'])) {
                        $row = ' ';
                    } else {
                        return $row->getprodi['prodi'];
                    }
                })
                ->addColumn('action', function ($row) {
                    // $actionBtn = '<a href="/dashboard/list/account/editaccount{id}' . $user->id . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    $actionBtn = '<a href="/dashboard/list/account/editaccount' . $row->id . '" " class="edit h-8 btn bg-green-500 text-white btn-sm">Edit</a> ';

                    return $actionBtn;
                })

                ->filter(function ($instance) use ($request) {
                    if ($request->get('fakultas') == '0' || $request->get('fakultas') == '1') {
                        $instance->where('fakultas_id', $request->get('fakultas'));
                    }
                    if (!empty($request->get('fakultas'))) {
                        $instance->where(function ($w) use ($request) {
                            $get = $request->get('fakultas');
                            $w->orWhere('fakultas_id', 'LIKE', "%$get%");
                        });
                    }
                    if (!empty($request->get('search'))) {
                        $instance->wherehas('getfakultas', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('fakultas', 'LIKE', "%$get%");
                        })->orWherehas('getprodi', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('prodi', 'LIKE', "%$get%");
                        })->orWhere(function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->orWhere('name', 'LIKE', "%$get%");
                            $w->orWhere('email', 'LIKE', "%$get%");
                            $w->orWhere('role', 'LIKE', "%$get%");
                            $w->orWhere('phone', 'LIKE', "%$get%");
                        });
                    }
                })

                ->rawColumns(['action'])
                ->make(true);
        }


        return view('transaction.list-account');
    }


    public function ListRepository(Request $request)
    {
        $data = Repository::with('getuserrepo');
        if ($request->ajax()) {

            return DataTables::eloquent($data)

                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    if (empty($row->getuserrepo['name'])) {
                        $row = ' ';
                    } else {
                        return $row->getuserrepo['name'];
                    }
                })
                ->addColumn('fakultas', function ($row) {
                    if (empty($row->getuserrepo->getfakultas['fakultas'])) {
                        $row = ' ';
                    } else {
                        return $row->getuserrepo->getfakultas['fakultas'];
                    }
                })
                ->addColumn('prodi', function ($row) {
                    if (empty($row->getuserrepo->getprodi['prodi'])) {
                        $row = ' ';
                    } else {
                        return $row->getuserrepo->getprodi['prodi'];
                    }
                })
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="/dashboard/validation/repository/' . $row->id . '" " class="edit h-8 btn bg-green-500 text-white btn-sm">Validasi</a> ';

                    return $actionBtn;
                })


                ->filter(function ($instance) use ($request) {
                    // if ($request->get('fakultas') == '0' || $request->get('fakultas') == '1') {
                    //     $instance->where('fakultas_id', $request->get('fakultas'));
                    // }
                    if (!empty($request->get('fakultas'))) {
                        $instance->wherehas('getuserrepo', function ($w) use ($request) {
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
                    if (!empty($request->get('search'))) {
                        $instance->wherehas('getuserrepo', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('name', 'LIKE', "%$get%");
                        })->orWhere(function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->orWhere('link_repository', 'LIKE', "%$get%");
                            $w->orWhere('status', 'LIKE', "%$get%");
                        })->orWherehas('getuserrepo.getfakultas', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('fakultas', 'LIKE', "%$get%");
                        })->orWherehas('getuserrepo.getprodi', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('prodi', 'LIKE', "%$get%");
                        });
                    }
                })

                ->rawColumns(['action'])
                ->make(true);
        }


        return view('transaction.validation-repository');
    }

    public function ListTransaction(Request $request)
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


    public function ViewValidation($id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.validation', compact('transaction'));
    }

    public function ViewAdminRepository($id)
    {
        $repository = Repository::find($id);
        return view('transaction.validation-digilib', compact('repository'));
    }
    public function AdminViewRepository()
    {
        $user = Repository::all();
        return view('transaction.validation-repository', compact('user'));
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
