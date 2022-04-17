<x-app-layout>
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">List Script</div>
    @endsection





    <div class="col-span-12 mt-6">
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    List Transaction
                </h2>
                <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

                </div>
            </div>



            @if (session()->has('message'))
                <div class="alert bg-green-700 text-white show flex items-center mb-2" role="alert">
                    <i data-feather="edit" class="w-6 h-6 mr-2 "></i>
                    {{ session()->get('message') }}
                </div>
            @endif
            @if (session()->has('reject'))
                <div class="alert bg-red-500 text-white show flex items-center mb-2" role="alert">
                    <i data-feather="x-square" class="w-6 h-6 mr-2 "></i>
                    {{ session()->get('reject') }}
                </div>
            @endif
            @if (session()->has('delete'))
                <div class="alert bg-red-700 text-white show flex items-center mb-2" role="alert">
                    <i data-feather="trash" class="w-6 h-6 mr-2 "></i>
                    {{ session()->get('delete') }}
                </div>
            @endif
            {{-- <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <table class="table table-report sm:mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">NAME</th>

                        <th class="whitespace-nowrap">TAHUN WISUDA</th>
                        <th class="whitespace-nowrap">FAKULTAS</th>
                        <th class="whitespace-nowrap">JURUSAN</th>
                        <th class="text-center whitespace-nowrap">UPLOAD TIME</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($transaction as $data)
                        <tr class="intro-x">
                            <td class="w-56">
                                <div class="font-medium whitespace-nowrap">{{ $data->transactions->name }}
                                </div>
                                <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">
                                    {{ $data->transactions->npm }}
                                </div>
                            </td>

                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $data->periode_wisuda }},
                                    {{ $data->tahun_wisuda }}</div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">
                                    {{ $data->transactions->getfakultas->fakultas }}
                                </div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $data->transactions->getprodi->prodi }}
                                </div>
                            </td>

                            <td class="text-center">
                                {{ $data->created_at->todatestring() }}</td>
                            <td class="text-center">
                                @if ($data->status == 'Sudah Tervalidasi')
                                    <span
                                        class="bg-green-200 text-green-600 py-1 px-3 rounded-full text-xs">Tervalidasi</span>
                                @elseif ($data->status == 'Permintaan Ditolak')
                                    <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs"> Ditolak
                                    </span>
                                @elseif ($data->status == 'Diproses')
                                    <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">Diproses
                                    </span>
                                @endif
                            </td>

                            <td class="table-report__action">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3 text-theme-10"
                                        href="{{ route('validation', ['id' => $data->id]) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Validasi</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $transaction->links() }}
        </div> --}}



            <table class="table table-bordered yajra-datatable">

                <button id="print" class="btn bg-sky-900 text-white w-32 mr-2 mb-2"> <i data-feather="printer"
                        class="w-4 h-4 mr-2"></i>
                    Print</button>
                <button id="excel" class="btn bg-sky-900 text-white w-32 mr-2 mb-2"> <i data-feather="book"
                        class="w-4 h-4 mr-2"></i>
                    Excel</button>
                <button id="csv" class="btn bg-sky-900 text-white w-32 mr-2 mb-2"> <i data-feather="file-plus"
                        class="w-4 h-4 mr-2"></i>
                    CSV</button>
                <button id="pdf" class="btn bg-sky-900 text-white w-32 mr-2 mb-2"> <i data-feather="file-text"
                        class="w-4 h-4 mr-2"></i>
                    PDF</button>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal Wisuda</th>
                        <th>Tahun Wisuda</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tanggal Upload</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>


</x-app-layout>
<script type="text/javascript">
    $(function() {
        $.fn.dataTable.ext.errMode = 'throw';
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,

            dom: 'Blfrtip',
            buttons: [{
                    extend: 'excelHtml5',
                    text: ' '
                },
                {
                    text: '',
                    extend: 'csvHtml5'
                },
                {
                    text: '',
                    extend: 'pdfHtml5'
                },
                {
                    text: '',
                    extend: 'print'
                }
            ],

            ajax: "{{ route('request.list') }}",

            columns: [

                {
                    data: 'id',
                    name: 'id'

                },
                {
                    data: 'name',
                    name: 'name'

                },
                {
                    data: 'periode_wisuda',
                    name: 'periode_wisuda'

                },
                {
                    data: 'tahun_wisuda',
                    name: 'tahun_wisuda'

                },
                {
                    data: 'fakultas',
                    name: 'fakultas'

                },
                {
                    data: 'prodi',
                    name: 'prodi'

                },
                {
                    data: 'created_at',
                    name: 'created_at'

                },
                {
                    data: 'status',
                    name: 'status'

                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                }
            ]

        });

        $("#print").click(function() {
            var table = $('.yajra-datatable').DataTable();
            table.button('.buttons-print').trigger();
        });
        $("#excel").click(function() {
            var table = $('.yajra-datatable').DataTable();
            table.button('.buttons-excel').trigger();
        });
        $("#pdf").click(function() {
            var table = $('.yajra-datatable').DataTable();
            table.button('.buttons-pdf').trigger();
        });
        $("#csv").click(function() {
            var table = $('.yajra-datatable').DataTable();
            table.button('.buttons-csv').trigger();
        });


        // $(".filter").change(function() {
        //     let fakultas = $("#fakultas").val();
        //     console.log([fakultas]);
        //     table.ajax.reload(null, false)
        // });


    });
</script>
