<?php

namespace App\Http\Controllers;

use App\Models\Helpdesk as ModelsHelpdesk;
use App\Http\Requests\StoreHelpdeskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateHelpdeskRequest;
use App\Models\Prodi;
use App\Models\Transaction;
use Balping\JsonRaw\Raw;
use Illuminate\Support\Facades\DB;
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
        $message = $attr['aksi'];
        $email = $test->getname->email;
        $details = [
            'title' => 'UPT Perpustakaan Unila',
            'body' => $message,
        ];
        $filename = public_path('Dokumentasi Sistem Perpus.pdf');

        $test->aksi = $attr['aksi'];
        $test->save();
        // dd($test);
        \Mail::to($email)->send(new \App\Mail\MyMail($details, $filename));
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

        // $emailsend = Transaction::find($id);
        // $message = $request['message'];
        // $email = $emailsend->transactions->email;

        // \Mail::to($email)->send(new \App\Mail\MyMail($details, $filename));
        return view('transaction.list-account');
    }


    // graph

    public function GraphHelpdesk(Request $request)
    {

        // high
        $graphpriohigh =
            ModelsHelpdesk::select(
                // ModelsHelpdesk::raw('DATE(created_at) as date'),
                ModelsHelpdesk::raw('count(*) as totalhigh')

            )->where('prioritas', 'High')->GroupBy(ModelsHelpdesk::raw("Month(created_at)"))->pluck('totalhigh');

        $monthhigh = ModelsHelpdesk::select(
            ModelsHelpdesk::raw("MONTHNAME(created_at) as bulanhigh")

        )->GroupBy(ModelsHelpdesk::raw("MONTHNAME(created_at)"))->where('prioritas', 'High')->OrderBy('created_at', 'asc')->pluck('bulanhigh');

        // medium
        $graphpriomedium =
            ModelsHelpdesk::select(
                ModelsHelpdesk::raw('count(*) as totalmedium')
            )->where('prioritas', 'Medium')->GroupBy(ModelsHelpdesk::raw("Month(created_at)"))->pluck('totalmedium');

        $monthmedium = ModelsHelpdesk::select(
            ModelsHelpdesk::raw("MONTHNAME(created_at) as bulanmedium")

        )->GroupBy(ModelsHelpdesk::raw("MONTHNAME(created_at)"))->where('prioritas', 'Medium')->OrderBy('created_at', 'asc')->pluck('bulanmedium');

        // low
        $graphpriolow =
            ModelsHelpdesk::select(
                ModelsHelpdesk::raw('count(*) as totallow')
            )->where('prioritas', 'Low')->GroupBy(ModelsHelpdesk::raw("Month(created_at)"))->pluck('totallow');

        $monthlow = ModelsHelpdesk::select(
            ModelsHelpdesk::raw("MONTHNAME(created_at) as bulanlow")

        )->GroupBy(ModelsHelpdesk::raw("MONTHNAME(created_at)"))->where('prioritas', 'Low')->OrderBy('created_at', 'asc')->pluck('bulanlow');



        return view('dashboard_helpdesk', compact('graphpriohigh', 'monthhigh', 'graphpriomedium', 'monthmedium', 'graphpriolow', 'monthlow'));

        // $data = [
        //     'baseng' => json_encode($graphprio->pluck('total')),
        // ];
        // ->where('prioritas');
        // ->groupBy('date')
        // ->orderBy('date', 'asc');


        // $tahunFilter = 2022;
        // if ($tahunFilter == 2022) {
        //     $graphprio = $graphprio->whereYear('created_at', $tahunFilter);
        // }
        // // $test= ['1','2',3];
        // // dd($totalHoax);





        // $graphprio = ModelsHelpdesk::count();
        // $a = $graphprio;

        // $a = [1, 2, 3, 4, 5];


        // $graphprio = $graphprio->get();
        // // end testing

        // return view('dashboard', compact('total', 'fakta', 'hoax', 'dataHoax', 'dataFakta'));
        // $helpdesk = ModelsHelpdesk::paginate(5);
        // $formatdate = $helpdesk->date;
        // dd($formatdate);
        // $helpdesk->getname2->name;
        // dd($userId);
        // $helpdesk = ModelsHelpdesk::select('*')->where('user_id', $userId)->get();
        // return view('transaction.admin_helpdesk', ['helpdesk' => $helpdesk]);
        // return view('dashboard_helpdesk', compact('a'));

    }


    // public function GraphPie(Request $request)
    // {
    //     $data = DB::table('helpdesks')->select(
    //         DB::raw('prioritas as prioritas'),
    //         DB::raw('count(*) as number')
    //     )->groupBy('prioritas')->get();
    //     $array[] = ['Prioritas', 'Number'];
    //     foreach ($data as $key => $value) {
    //         $array[++$key] = [$value->prioritas, $value->number];
    //     }
    //     return view('google_pie_chart')->with('prioritas', json_encode($array));
    // }

    // public function tesgraph()
    // {
    //     $users = ModelsHelpdesk::select(DB::raw("COUNT(*) as count"), DB::raw("MONTHNAME(created_at) as month_name"))
    //         ->whereYear('created_at', date('Y'))
    //         ->groupBy(DB::raw("Month(created_at)"))
    //         ->pluck('count', 'month_name');

    //     $labels = $users->keys();
    //     $data = $users->values();

    //     return view('dashboard_helpdesk', compact('labels', 'data'));
    // }
}
