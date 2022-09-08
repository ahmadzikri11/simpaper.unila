<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Route;
// use Illuminate\Support\Facades\Route;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Repository;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Skbp;
use Illuminate\Cache\Repository as CacheRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

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
    public function AdminProfileUpdate()
    {
        $user = Auth::user();
        return view('profile_admin', compact('user',));
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
                ->addColumn('npm', function ($row) {
                    if (empty($row->transactions['npm'])) {
                        $row = ' ';
                    } else {
                        return $row->transactions['npm'];
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
                            $w->orWhere('npm', 'LIKE', "%$get%");
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

    public function ListTransactionSKBP(Request $request)
    {
        if ($request->ajax()) {
            $data = Skbp::with('getskbp');
            return DataTables::eloquent($data)
                ->addIndexColumn()
                // ->addColumn('action', function ($row) {
                // // $actionBtn = '<a href="/dashboard/list/account/editaccount{id}' . $user->id . '" class="edit btn btn-success btn-sm">Edit</a> ';
                //     $actionBtn = '<a href="/dashboard/list/SKBP/ValdasiSKBP/' . $row->id . '" " class="edit h-8 btn bg-green-500 text-white btn-sm">Validasi</a> ';

                //     return $actionBtn;
                // })
                ->addColumn('name', function ($row) {
                    if (empty($row->getskbp['name'])) {
                        $row = ' ';
                    } else {
                        return $row->getskbp['name'];
                    }
                })
                ->addColumn('email', function ($row) {
                    if (empty($row->getskbp['email'])) {
                        $row = ' ';
                    } else {
                        return $row->getskbp['email'];
                    }
                })
                ->addColumn('npm', function ($row) {
                    return $row->getskbp['npm'] ?? '';
                })
                ->addColumn('alamat', function ($row) {
                    return $row->getskbp['alamat'] ?? '';
                })
                ->addColumn('fakultas', function ($row) {
                    return $row->getskbp->getfakultas['fakultas'] ?? '';
                })

                ->addcolumn('prodi', function ($row) {
                    return $row->getskbp->getprodi['prodi'] ?? '';
                })

                ->addColumn('action', function ($row) {
                    // $actionBtn = '<a href="/dashboard/list/account/editaccount{id}' . $user->id . '" class="edit btn btn-success btn-sm">Edit</a> ';
                    $actionBtn = '<a href="/dashboard/list/SKBP/ValdasiSKBP/' . $row->id . '" " class="edit h-8 btn bg-green-500 text-white btn-sm">Validasi</a> ';

                    return $actionBtn;
                })

                ->editColumn('created_at', function ($row) {
                    //change over here
                    return date('d-m-Y', strtotime($row->created_at));
                })
                // ->addColumn('fakultas', function ($row) {
                //     if (empty($row->getskbp->getfakultas['fakultas'])) {
                //         $row = ' ';
                //     } else {
                //         return $row->getskbp->getfakultas['fakultas'];
                //     }
                // })
                // ->addColumn('prodi', function ($row) {
                //     if (empty($row->getskbp->getprodi['prodi'])) {
                //         $row = ' ';
                //     } else {
                //         return $row->getskbp->getprodi['prodi'];
                //     }
                // })

                ->filter(function ($instance) use ($request) {
                    if (!empty($request->get('fakultas'))) {
                        $instance->wherehas('getskbp', function ($w) use ($request) {
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
                        $instance->wherehas('getskbp', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('name', 'LIKE', "%$get%");
                            $w->orWhere('npm', 'LIKE', "%$get%");
                            $w->orWhere('email', 'LIKE', "%$get%");
                        })->orWhere(function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->orWhere('created_at', 'LIKE', "%$get%");
                            $w->orWhere('status', 'LIKE', "%$get%");
                        })->orWherehas('getskbp.getfakultas', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('fakultas', 'LIKE', "%$get%");
                        })->orWherehas('getskbp.getprodi', function ($w) use ($request) {
                            $get = $request->get('search');
                            $w->Where('prodi', 'LIKE', "%$get%");
                        });
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        // $transaction = Skbp::paginate(10);
        return view('transaction.list-transaction_skbp');
    }



    public function ViewValidation($id)
    {
        $transaction = Transaction::find($id);
        return view('transaction.validation', compact('transaction'));
    }
    public function ListSKBP()
    {
        $skbp = Skbp::all();
        return view('transaction.list-transaction_skbp', compact('skbp'));
    }
    public function ViewValidasiSKBP($id)
    {
        $skbp = Skbp::find($id);
        return view('transaction.validationSKBP', compact('skbp'));
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
        return view('test');
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
