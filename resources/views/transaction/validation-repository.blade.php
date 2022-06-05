<x-app-layout>
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Validation
        </h2>
    </div>
    <div>
        <table class="table table-bordered yajra-datatable">
            <div class="w-ful">
                @if (session()->has('message'))
                    <div class="alert bg-green-500 text-white show flex items-center mb-2" role="alert">
                        <i data-feather="file-plus" class="w-6 h-6 mr-2 "></i>
                        {{ session()->get('message') }}
                    </div>
                @endif
            </div>
            <div class="w-full  sm:w-auto flex">
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box text-gray-700 " aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                data-feather="plus"></i></span> Download File
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box -1 p-2">

                            <button id="print"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white  hover:bg-gray-200 rounded-md">
                                <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                            <button id="excel"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white  hover:bg-gray-200 rounded-md">
                                <i data-feather="book" class="w-4 h-4 mr-2"></i> Excel </button>
                            <button id="csv"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white  hover:bg-gray-200 rounded-md">
                                <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> CSV </button>
                            <button id="pdf"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white  hover:bg-gray-200 rounded-md">
                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> PDF </button>
                        </div>

                    </div>
                </div>
                <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 412 232">
                    <path
                        d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                        fill="#648299" fill-rule="nonzero" />
                </svg>
                <div class="ml-2">
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
                        <option value="Diproses">Dalam Proses</option>
                        <option value="Telah Diperbaiki">Telah Diperbaiki</option>
                    </select>
                </div>
                <div class="ml-2">
                    <input id="search" placeholder="Pencarian"
                        class="border search border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                </div>

            </div>

            <div class="relative inline-flex">

            </div>

            {{-- <div>
                <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview">
                    <button class="btn bg-green-600 text-white w-32 mr-2 mb-2"> <i data-feather="user-plus"
                            class="w-4 h-4 mr-2"></i>
                        Import User</button>
                </a>
            </div> --}}

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Link Digilib</th>
                    <th>Status</th>
                    <th>Validator</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
                url: "{{ route('list_repository') }}",
                data: function(d) {
                    d.fakultas = $("#fakultas").val();
                    d.validasi = $("#validasi").val();
                    d.search = $("#search").val();
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
                    data: 'fakultas',
                    name: 'fakultas'

                },

                {
                    data: 'prodi',
                    name: 'prodi'

                },
                {
                    data: 'link_repository',
                    name: 'link_repository'

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
                        if (data == 'Telah Diperbaiki') {
                            text = "Diperbaiki";
                            label = "bg-gray-700";
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
                },
            ]

        });

        $("#print").click(function() {
            var table = $('.yajra-datatable').DataTable();
            table.button('.buttons-pdf').trigger();
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


        $("#fakultas").change(function() {
            let fakultas = $("#fakultas").val();
            console.log([fakultas]);
            table.ajax.reload(null, false)
        });
        $("#search").change(function() {
            let search = $("#search").val();
            console.log([search]);
            table.ajax.reload(null, false)
        });
        $("#validasi").change(function() {
            let validasi = $("#validasi").val();
            console.log([validasi]);
            table.ajax.reload(null, false)
        });
    });
</script>
