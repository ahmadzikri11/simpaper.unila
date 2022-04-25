<x-app-layout>
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">List Account</div>
    @endsection
    <!-- BEGIN: Weekly Top Products -->
    <div class="col-span-12 mt-6">
        <div class="intro-y block sm:flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                List Account
            </h2>
            <div class="flex items-center sm:ml-auto mt-3 sm:mt-0">

            </div>
        </div>
        <div class="intro-y overflow-auto lg:overflow-visible mt-8 sm:mt-0">
            @if (session()->has('edit'))
                <div class="alert bg-green-700 text-white show flex items-center mb-2" role="alert">
                    <i data-feather="edit" class="w-6 h-6 mr-2 "></i>
                    {{ session()->get('edit') }}
                </div>
            @endif
            {{-- <table class="table table-report sm:mt-2">
                @if (session()->has('edit'))
                    <div class="alert bg-green-700 text-white show flex items-center mb-2" role="alert">
                        <i data-feather="edit" class="w-6 h-6 mr-2 "></i>
                        {{ session()->get('edit') }}
                    </div>
                @endif

                @if (session()->has('delete'))
                    <div class="alert bg-red-700 text-white show flex items-center mb-2" role="alert">
                        <i data-feather="trash" class="w-6 h-6 mr-2 "></i>
                        {{ session()->get('delete') }}
                    </div>
                @endif

                <thead>
                    <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class="whitespace-nowrap">NAME</th>
                        <th class="whitespace-nowrap">FAKULTAS</th>
                        <th class="whitespace-nowrap">JURUSAN</th>
                        <th class="text-center whitespace-nowrap">WHATSAPP</th>
                        <th class="text-center whitespace-nowrap">ROLE</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $data)
                        <tr class="intro-x">
                            <td class="">
                                <div class="font-medium whitespace-nowrap">{{ $data->id }}</div>
                            </td>
                            <td>
                                <div class="font-medium whitespace-nowrap">{{ $data->name }}</div>
                                <div class="text-gray-600 text-xs whitespace-nowrap mt-0.5">{{ $data->npm }}
                                </div>
                            </td>

                            @if (empty($data->fakultas_id))
                                <td class="text-center"></td>
                            @else
                                <td class="text-center">{{ $data->getfakultas->fakultas }}</td>
                            @endif

                            @if (empty($data->prodi_id))
                                <td class="text-center"></td>
                            @else
                                <td class="text-center">{{ $data->getprodi->prodi }}</td>
                            @endif

                            <td class="text-center">{{ $data->phone }}</td>
                            <td class="w-40">
                                @if ($data->role == 'admin')
                                    <div class="flex items-center justify-center text-red-400"> <i data-feather="user"
                                            class="w-4 h-4 mr-2"></i> {{ $data->role }}
                                    </div>
                                @else
                                    <div class="flex items-center justify-center text-violet-600"> <i
                                            data-feather="user" class="w-4 h-4 mr-2"></i> {{ $data->role }}
                                    </div>
                                @endif
                            </td>
                            <td class="table-report__action ">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center mr-3 text-theme-10"
                                        href="{{ route('edit.account', ) }}">
                                        <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit</a>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table> --}}

            {{-- {{ $user->links() }} --}}
            <table class="table table-bordered yajra-datatable">

                <div class="w-full  sm:w-auto flex">

                    <div class="dropdown">
                        <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300"
                            aria-expanded="false">
                            <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                    data-feather="plus"></i></span> Download File
                        </button>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">

                                <button id="print"
                                    class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="printer" class="w-4 h-4 mr-2"></i> Print </button>
                                <button id="excel"
                                    class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="book" class="w-4 h-4 mr-2"></i> Excel </button>
                                <button id="csv"
                                    class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file-plus" class="w-4 h-4 mr-2"></i> CSV </button>
                                <button id="pdf"
                                    class="flex w-full items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file-text" class="w-4 h-4 mr-2"></i> PDF </button>
                            </div>

                        </div>
                    </div>
                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
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
                    </div>
                    <div class="ml-2">
                        <input id="search" placeholder="Pencarian"
                            class="border search border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    </div>

                </div>

                <div class="relative inline-flex">

                </div>

                <div>
                    <a href="javascript:;" data-toggle="modal" data-target="#button-modal-preview">
                        <button class="btn bg-green-600 text-white w-32 mr-2 mb-2"> <i data-feather="user-plus"
                                class="w-4 h-4 mr-2"></i>
                            Import User</button>
                    </a>
                </div>

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Fakultas</th>
                        <th>Jurusan</th>
                        <th>Email</th>
                        <th>Whatapps</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>




    <!-- BEGIN: Modal With Close Button -->

    <!-- BEGIN: Modal Content -->
    <div id="button-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white rounded-lg">
                <a data-dismiss="modal" href="javascript:;"> <i data-feather="x" class="w-8 h-8 text-gray-500"></i>
                </a>
                <form action="{{ route('import') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body p-0">
                        <div class="p-5 text-center"> <i data-feather="user-plus"
                                class="w-16 h-16 text-theme-10 mx-auto mt-3"></i></div>
                        <label for="formFileSm" class="form-label inline-block mb-2 ml-10 text-gray-700">Masukan File
                            User</label>
                        <input
                            class="form-control block w-full px-10  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="file_user" name="file_user" type="file">

                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="submit" class="btn mt-5 text-white bg-green-500 w-24">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- END: Modal Content -->
    </div>
    <div class="source-code hidden">
        <button data-target="#copy-button-modal" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i
                data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
        <div class="overflow-y-auto mt-3 rounded-md">
            <pre id="copy-button-modal"
                class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-toggle=&quot;modal&quot; data-target=&quot;#button-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;button-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTaga data-dismiss=&quot;modal&quot; href=&quot;javascript:;&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;x&quot; class=&quot;w-8 h-8 text-gray-500&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTag/aHTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body p-0&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;p-5 text-center&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;check-circle&quot; class=&quot;w-16 h-16 text-theme-10 mx-auto mt-3&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;text-3xl mt-5&quot;HTMLCloseTagModal ExampleHTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-gray-600 mt-2&quot;HTMLCloseTagModal with close buttonHTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;px-5 pb-8 text-center&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-dismiss=&quot;modal&quot; class=&quot;btn btn-primary w-24&quot;HTMLCloseTagOkHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
        </div>
    </div>

    <!-- END: Delete Modal -->

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
                url: "{{ route('account.list') }}",
                data: function(d) {
                    d.fakultas = $("#fakultas").val();
                    d.search = $("#search").val();
                }
            },

            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'getfakultas',
                    name: 'getfakultas.fakultas'
                },
                {
                    data: 'getprodi',
                    name: 'getprodi.prodi'

                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'phone',
                    name: 'phone'
                },

                {
                    data: 'role',
                    name: 'role'
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
