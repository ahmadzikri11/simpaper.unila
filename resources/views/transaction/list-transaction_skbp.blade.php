<x-app-layout>
{{-- 
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-7">
        @if (session()->has('message'))
            <div class="alert h-10 bg-green-500 text-white rounded-lg show flex items-center mb-2" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd" />
                </svg>
                {{ session()->get('message') }}
            </div>
        @endif
    </div> --}}

    <div class="col-span-12 mt-6">
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            <div class="intro-y block sm:flex items-center h-10">
                <h2 class="text-lg font-medium truncate mr-5">
                    List Upload
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
            <div class="w-full mb-2 sm:w-auto flex">
                <div class="dropdown">
                    <button class="dropdown-toggle btn px-2 box text-gray-700" aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                data-feather="plus"></i></span> Download File
                    </button>
                    <div class="dropdown-menu w-40">
                        <div class="dropdown-menu__content box p-2">

                            <button id="print"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white rounded-md">
                                <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                            <button id="excel"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white rounded-md">
                                <i data-feather="book" class="w-4 h-4 mr-2"></i> Excel </button>
                            <button id="csv"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white rounded-md">
                                <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> CSV </button>
                            <button id="pdf"
                                class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white rounded-md">
                                <i data-feather="file-text" class="w-4 h-4 mr-2"></i> PDF </button>
                        </div>
                    </div>
                </div>
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
                    <option value="Tervalidasi">Tervalidasi</option>
                    <option value="Revisi">Revisi</option>
                    <option value="proses">Diproses</option>
                    {{-- <option value="Telah Diperbaiki">Telah Diperbaiki</option>
                    <option value="Telah Upload Digilib">Telah Upload Digilib</option> --}}
                </select>

                <div class="ml-3 mb-2">
                    <input id="search"
                        class="border search border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none"
                        placeholder="Search">
                </div>

            </div>

            <tr>

                <th>id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>NPM</th>
                <th>Fakultas</th>
                <th>Prodi</th>
                <th>tanggal upload</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- <tr>
            </tr>
            @foreach ($skbp as $skbp)
                <tr>
                    <td>{{ $skbp->id }}</td>
                    <td>{{ $skbp->getskbp->name }}</td>
                    <td>{{ $skbp->getskbp->email }}</td>
                    <td>{{ $skbp->getskbp->npm }}</td>
                    <td>{{ $skbp->getskbp->getfakultas->fakultas }} / {{ $skbp->getskbp->getfakultas->fakultass->prodi }}</td>
                    <td>{{ $skbp->created_at->format('d-m-Y') }}</td>
                    <td>{{ $skbp->status }}</td>
                    <td>
                        
                        <a href="{{ route('validasi.skbp' , ['id' => $skbp->id]) }}">
                            <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                            class="inline-block px-3 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Reply</button>
                        </a>
                        {{-- </form>     --}}
                    {{-- </td>
                    
                </tr>
                @endforeach --}}
                {{-- {{ $helpdesk->links() }} --}}
            </tbody>
        </table>

        <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-white rounded-md p-5">
                    <!-- BEGIN: Modal Header -->
                    <div class="modal-header p-5">
                        <h2 class="font-medium text-base mr-auto">
                            Input Keterangan
                    </h2>
                    <div class="dropdown sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                            data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
                        </a>
                        
                    </div>
                </div>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->

                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        <div class="ml-10">
                            <div class="mb-3 w-80 ">
                                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input Reply
                                    :</label>
                                <input
                                    class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="aksi1" name="aksi" type="text">
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                onclick="aksi()">Send</button>
                        </div>
                    </div>
                </div>
            </div>
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
                url: "{{ route('list.skbp') }}",
                data: function(d) {
                    d.fakultas = $("#fakultas").val();
                    d.validasi = $("#validasi").val();
                    d.search = $("#search").val();
                // console.log(d.fakultas);
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
                    data: 'email',
                    name: 'email'
                },
                { 
                    data: 'alamat',
                    name: 'alamat'
                },
                { 
                    data: 'npm',
                    name: 'npm'
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
                        if (data == "Tervalidasi") {
                            text = "Tervalidasi";
                            label = "bg-green-800";
                        } else
                        if (data == 'Revisi') {
                            text = "Revisi";
                            label = "bg-yellow-500";
                        }
                        if (data == 'proses') {
                            text = "Diproses";
                            label = "bg-red-700";
                        }
                        if (data == 'Telah Diperbaiki') {
                            text = "Diperbaiki";
                            label = "bg-gray-700";
                        }
                        if (data == 'Validasi Akun') {
                            text = "Validasi_Akun";
                            label = "bg-green-400";
                        }
                        if (data == 'Telah Upload Digilib') {
                            text = "Telah_Upload_Digilib";
                            label = "bg-blue-600";
                        }

                        return "<span class= '" + label +
                            "  text-white py-1 px-3 rounded-full text-xs' >" + text +
                            "</span>";
                    }
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
    });
</script>


