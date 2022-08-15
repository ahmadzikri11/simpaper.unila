<?php

namespace App\Http\Controllers;

use App\Models\Helpdesk as ModelsHelpdesk;
use App\Http\Requests\StoreHelpdeskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateHelpdeskRequest;
use App\Models\Prodi;
use Yajra\DataTables\Facades\DataTables;

class HelpdeskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('helpdesk');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateHelpdesk(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'layanan' => 'required',
            'keterangan' => 'required',
            'prioritas' => 'required',
        ]);
        // dd($attr);
        $attr['user_id'] = $user;
        ModelsHelpdesk::create($attr);
        return redirect()->route('user.helpdesk')->with('message', 'Berhasil Mengirim');
    }

    public function ViewHelpdesks(Request $request)
    {
        // $a = Auth::user();
        $b = ModelsHelpdesk::all();
        return view('helpdesk', compact('b'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHelpdeskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->id;
        $attr = $request->validate([
            'layanan' => 'required',
            'keterangan' => 'required',
        ]);
        dd($attr);
        $attr['user_id'] = $user;
        ModelsHelpdesk::store($attr);
        return view('helpdesk')->with('message', ' Data Kamu Telah Diupdate!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function show(ModelsHelpdesk $helpdesk)
    {
        //
    }

    // public function DashboardHelpdesk()
    // {
    //     $prioritastotal = ModelsHelpdesk::count();
    //     $proditotal = Prodi::where('prodi')->count();

    //     return view('dashboard', compact('prioritastotal', 'proditotal'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function edit(ModelsHelpdesk $helpdesk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHelpdeskRequest  $request
     * @param  \App\Models\Helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHelpdeskRequest $request, ModelsHelpdesk $helpdesk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Helpdesk  $helpdesk
     * @return \Illuminate\Http\Response
     */
    public function destroy(ModelsHelpdesk $helpdesk)
    {
        //
    }

    // helpdesk
    public function View()
    {

        $userId = Auth::id();
        // dd($userId);
        $helpdesk = ModelsHelpdesk::select('*')->where('user_id', $userId)->get();
        return view('helpdesk', ['helpdesk' => $helpdesk]);
    }

    // admin
    public function TableUnila()
    {


        $helpdesk = ModelsHelpdesk::paginate(5);
        // $formatdate = $helpdesk->date;
        // dd($formatdate);
        // $helpdesk->getname2->name;
        // dd($userId);
        // $helpdesk = ModelsHelpdesk::select('*')->where('user_id', $userId)->get();
        return view('transaction.admin_helpdesk', ['helpdesk' => $helpdesk]);
    }

    public function AksiInput(Request $request)
    {
        $test = ModelsHelpdesk::find($request->id);

        $attr = $request->validate([
            'aksi' => 'required',
        ]);

        $test->aksi = $attr['aksi'];
        $test->save();
        return redirect()->route('admin.helpdesk')->with('message', 'Aksi Telah Terupdate!');
    }

    public function ListHelpdesk(Request $request)
    {
        // $data = HelpdeskController::with('getname');
        $data = ModelsHelpdesk::with('getname');
        if ($request->ajax()) {

            return DataTables::eloquent($data)

                ->addIndexColumn()
                ->addColumn('name', function ($row) {
                    if (empty($row->getname['name'])) {
                        $row = '';
                    } else {
                        return $row->getname['name'];
                    }
                })
                ->addColumn('email', function ($row) {
                    if (empty($row->getname['email'])) {
                        $row = '';
                    } else {
                        return $row->getname['email'];
                    }
                })
                ->addColumn('prodi', function ($row) {
                    if (empty($row->getname->getprodi['prodi'])) {
                        $row = ' ';
                    } else {
                        return $row->getname->getprodi['prodi'];
                    }
                })
                // ->addColumn('getfakultas', function ($row) {
                //     if (empty($row->getfakultas['fakultas'])) {
                //         $row = '';
                //     } else {
                //         return $row->getfakultas['fakultas'];
                //     }
                // })
                // ->addColumn('getprodi', function ($row) {
                //     if (empty($row->getprodi['prodi'])) {
                //         $row = ' ';
                //     } else {
                //         return $row->getprodi['prodi'];
                //     }
                // })
                ->addColumn('action', function ($row) {
                    // dd($row->id);
                    // die;
                    if ($row->aksi == null) {
                        $actionBtn = '<a href="javascript:/helpdesk/aksi;" onclick="setId(' . $row->id . ')"  data-toggle="modal"
                        data-target="#header-footer-modal-preview" data-community="{{ json_encode(' . $row . ') }}" class="edit h-8 btn bg-green-500 text-white btn-sm">Edit</a> ';
                    } else {
                        $actionBtn = $row->aksi;
                    }


                    return $actionBtn;
                })

                ->rawColumns(['action'])
                ->make(true);
        }


        return view('transaction.list-account');
    }

    public function GraphHelpdesk(Request $request)
    {
        // $helpdesk = ModelsHelpdesk::paginate(5);
        // $formatdate = $helpdesk->date;
        // dd($formatdate);
        // $helpdesk->getname2->name;
        // dd($userId);
        // $helpdesk = ModelsHelpdesk::select('*')->where('user_id', $userId)->get();
        // return view('transaction.admin_helpdesk', ['helpdesk' => $helpdesk]);
        return view('dashboard_helpdesk');
    }
}
