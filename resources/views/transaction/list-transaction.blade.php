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

            <div>

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
            </div>

            <table class="table table-bordered yajra-datatable">



                <thead>
                    <div class="relative inline-flex">
                        <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                            <path
                                d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                                fill="#648299" fill-rule="nonzero" />
                        </svg>
                        <select id="fakultas"
                            class="border filter border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="">Pilih Fakultas</option>
                            <option value="1">Fakultas Teknik</option>
                            <option value="2">Fakultas Pertanian</option>
                            <option value="3">Fakultas Kedokteran</option>
                            <option value="4">Fakultas Matematika dan Ipa</option>
                            <option value="5">Fakultas Hukum</option>
                            <option value="6">Fakultas Ilmu Sosial dan Politik</option>
                            <option value="7">Fakultas Keguruan dan Ilmu Pendidikan</option>
                            <option value="8">Fakultas Ekonomi dan Bisnis</option>
                        </select>
                        <select id="validasi"
                            class=" mb-2 ml-2 border filter border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="">Pilih Status </option>
                            <option value="Sudah Tervalidasi">Sudah Validasi</option>
                            <option value="Revisi">Revisi</option>
                            <option value="Diproses">On Proses</option>
                        </select>
                        <select id="periode_wisuda"
                            class=" mb-2 ml-2 border filter border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="">Periode </option>
                            <option value="januari">Januari</option>
                            <option value="maret">Maret</option>
                            <option value="mei">Mei</option>
                            <option value="juli">Juli</option>
                            <option value="september">September</option>
                            <option value="november">November</option>
                        </select>

                        <select id="tahun_wisuda"
                            class=" mb-2 ml-2 border filter border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                            <option value="">Pilih Tahun</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>

                        <div class="ml-3 mb-2">
                            <input id="search"
                                class="border search border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
                                placeholder="Search">
                        </div>
                    </div>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Tanggal Wisuda</th>
                        <th>Tahun Wisuda</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Tanggal Upload</th>
                        <th>Status</th>
                        <th>Validator</th>
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

            dom: 'Blrtip',
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
            ajax: {
                url: "{{ route('request.list') }}",
                data: function(d) {
                    d.validasi = $("#validasi").val();
                    d.periode_wisuda = $("#periode_wisuda").val();
                    d.fakultas = $("#fakultas").val();
                    d.search = $("#search").val();
                    d.tahun_wisuda = $("#tahun_wisuda").val();
                    // d.search = $("#search").val();
                }
            },
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
                    render: function(data, type, row) {
                        var text = "";
                        var label = "";
                        if (data == "Sudah Tervalidasi") {
                            text = "Tervalidasi";
                            label = "bg-green-700";
                        } else
                        if (data == 'Revisi') {
                            text = "Revisi";
                            label = "bg-yellow-500";
                        }
                        if (data == 'Diproses') {
                            text = "Diproses";
                            label = "bg-red-700";
                        }

                        return "<span class= '" + label +
                            "  text-white py-1 px-3 rounded-full text-xs' >" + text +
                            "</span>";
                    }
                },
                {
                    data: 'validator',
                    name: 'validator'
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


        $("#validasi").change(function() {
            let validasi = $("#validasi").val();
            console.log([validasi]);
            table.ajax.reload(null, false)
        });
        $("#periode_wisuda").change(function() {
            let periode_wisuda = $("#periode_wisuda").val();
            console.log([periode_wisuda]);
            table.ajax.reload(null, false)
        });
        $("#fakultas").change(function() {
            let fakultas = $("#fakultas").val();
            // console.log([fakultas]);
            table.ajax.reload(null, false)
        });
        $("#search").change(function() {
            let search = $("#search").val();
            console.log([search]);
            table.ajax.reload(null, false)
        });
        $("#tahun_wisuda").change(function() {
            let tahun_wisuda = $("#tahun_wisuda").val();
            console.log([tahun_wisuda]);
            table.ajax.reload(null, false)
        });


    });
</script>
