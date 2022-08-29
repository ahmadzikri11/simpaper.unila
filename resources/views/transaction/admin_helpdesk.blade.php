<x-app-layout>

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
    </div>

    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                {{-- <th>No</th> --}}
                <th>Nama</th>
                <th>Email</th>
                <th>Prodi</th>
                <th>Layanan</th>
                <th>Keterangan</th>
                <th>Prioritas</th>
                {{-- <th>Status</th> --}}
                <th>Aksi</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            </tr>
            {{-- @php
                $no = 1;
            @endphp --}}
            {{-- @foreach ($helpdesk as $hd)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $hd->getname->name }}</td>
                    <td>{{ $hd->getname->email }}</td>
                    <td>{{ $hd->getname->getfakultas->fakultas }} /
                        {{ $hd->getname->getfakultas->fakultass->prodi }}
                    </td>
                    <td>{{ $hd->layanan }}</td>
                    <td>{{ $hd->keterangan }}</td>
                    <td>{{ $hd->prioritas }}</td>
                    <td>
                        @if (isset($hd->aksi))
                            {{ $hd->aksi }}
                        @else
                            <a href="javascript:/helpdesk/aksi;" onclick="setId(<?= $hd->id ?>)" data-toggle="modal"
                                data-target="#header-footer-modal-preview" data-community="{{ json_encode($hd) }}">
                                <button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
                                    class="inline-block px-3 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Reply</button>
                            </a>
                        @endif
                    </td>
                    <td>{{ $hd->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
            {{ $helpdesk->links() }} --}}

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
                                onclick="()">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let id;
            const setId = (params) => {
                console.log(params)
                id = params
                $('#aksi1').val('')
            }
            const aksi = () => {
                console.log('value', $('#aksi1').val(), id)
                // return;
                $.ajax({
                    url: '/helpdesk/update',
                    type: 'POST',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        id,
                        aksi: $('#aksi1').val()
                    },
                    success: function(data) {
                        console.log(data)
                        $('#header-footer-modal-preview').modal('hide')
                        window.location.reload()
                    }
                })
            }




            $(function() {
                $.fn.dataTable.ext.errMode = 'throw';
                var table = $('.yajra-datatable').DataTable({
                    "order": [
                        [0, "desc"]
                    ],
                    processing: true,
                    serverSide: true,

                    // dom: 'Blrtip',

                    ajax: "{{ route('helpdesk.list') }}",
                    columns: [
                        // {
                        //     data: 'id',
                        //     name: 'id'
                        // },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'prodi',
                            name: 'prodi'
                        },
                        {
                            data: 'layanan',
                            name: 'layanan'
                        },
                        {
                            data: 'keterangan',
                            name: 'keterangan'
                        },
                        {
                            data: 'prioritas',
                            name: 'prioritas'
                        },
                        {
                            data: 'action',
                            name: 'action'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            orderable: true,
                            searchable: true
                        },
                    ]

                });
            });
        </script>
</x-app-layout>
