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
                {{-- <div class="relative inline-flex">
                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                        <path
                            d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                            fill="#648299" fill-rule="nonzero" />
                    </svg>
                    <select id="fakultas"
                        class="border filter border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                        <option value="">Choose Fakultas</option>
                        <option value="1">Fakultas Teknik</option>
                        <option value="2">Fakultas Pertanian</option>
                        <option value="3">Fakultas Kedokteran</option>
                        <option value="4">Fakultas Matematika dan Ipa</option>
                        <option value="5">Fakultas Hukum</option>
                        <option value="6">Fakultas Ilmu Sosial dan Politik</option>
                        <option value="7">Fakultas Keguruan dan Ilmu Pendidikan</option>
                        <option value="8">Fakultas Ekonomi dan Bisnis</option>
                    </select>
                    <div class="ml-3">
                        <input id="search"
                            class="border search border-gray-300 rounded-full text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                    </div>
                </div> --}}

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
    <!-- END: Weekly Top Products -->

    <!-- BEGIN: Delete Modal -->


    <!-- BEGIN: Modal Content -->

    <!-- END: Modal Content -->
    </div>
    <div class="source-code hidden">
        <button data-target="#copy-delete-modal" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i
                data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
        <div class="overflow-y-auto mt-3 rounded-md">
            <pre id="copy-delete-modal"
                class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-toggle=&quot;modal&quot; data-target=&quot;#delete-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;delete-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body p-0&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;p-5 text-center&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;x-circle&quot; class=&quot;w-16 h-16 text-theme-24 mx-auto mt-3&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTagdiv class=&quot;text-3xl mt-5&quot;HTMLCloseTagAre you sure?HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;text-gray-600 mt-2&quot;HTMLCloseTagDo you really want to delete these records? HTMLOpenTagbrHTMLCloseTagThis process cannot be undone.HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;px-5 pb-8 text-center&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-dismiss=&quot;modal&quot; class=&quot;btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1&quot;HTMLCloseTagCancelHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; class=&quot;btn btn-danger w-24&quot;HTMLCloseTagDeleteHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
        </div>
    </div>
    <!-- END: Delete Modal -->




    {{-- <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
        id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <p class=" font-semibold">
                        Hapus Transaksi
                    </p>

                    <button class="focus:outline-none p-2" onclick="toggleModal('modal-id')">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </div>
                <!--body-->
                <div class=" mx-auto mt-5 items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 -m-1 flex items-center text-red-500 mx-auto"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 flex items-center text-red-500 mx-auto"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                            clip-rule="evenodd" />
                    </svg>

                </div>
                <div class="relative p-6 flex-auto">

                    <p class="text-sm text-gray-500 px-8">Apakah kamu yakin untuk menghapus transaksi
                        {{ $data->name }}?</p>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                    <a href="{{ route('delete.account', ['id' => $data->id]) }}"
                        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                        <div class="input-group">
                            <input type="hidden" class="form-control" name="status" id="status"
                                value="Sudah Tervalidasi">
                            <button type="submit" onclick="toggleModal('modal-id')">
                                Hapus
                            </button>
                        </div>
                    </a>


                </div>
            </div>
        </div>
    </div>
    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>
    <script type="text/javascript">
        function toggleModal(modalID) {
            document.getElementById(modalID).classList.toggle("hidden");
            document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
            document.getElementById(modalID).classList.toggle("flex");
            document.getElementById(modalID + "-backdrop").classList.toggle("flex");
        }
    </script> --}}
</x-app-layout>
<script type="text/javascript">
    $(function() {
        $.fn.dataTable.ext.errMode = 'throw';
        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,

            dom: 'Bfrtip',
            buttons: [{
                extend: 'excelHtml5',
                text: 'Download'
            }],

            ajax: {
                url: "{{ route('account.list') }}",
                data: function(d) {
                    d.fakultas = $("#fakultas").val();
                    return d
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
        // $(".filter").change(function() {
        //     let fakultas = $("#fakultas").val();
        //     console.log([fakultas]);
        //     table.ajax.reload(null, false)
        // });


    });
</script>
