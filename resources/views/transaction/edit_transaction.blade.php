<x-app-layout>

    @section('navi')
        <div>UPT Perpustakaan</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Status</div>
    @endsection
    <div class="max-w-7xl mt-7 mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Status Validasi</h3>
                        <p class="mt-1 text-sm text-gray-600"> Upload File </p>
                    </div>
                </div>




                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="w-ful">
                        @if (session()->has('message'))
                            <div class="alert bg-green-500 text-white show flex items-center mb-2" role="alert">
                                <i data-feather="file-plus" class="w-6 h-6 mr-2 "></i>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    {{-- <div class="w-ful">
                        @if (session()->has('message'))
                            <script>
                                window.onload = function() {
                                    var button = document.getElementById('modalvalidasi');
                                    button.click();
                                }
                            </script>
                            <div class="text-center hidden"> <a href="javascript:;" id="modalvalidasi"
                                    data-toggle="modal" data-target="#success-modal-preview"
                                    class="btn btn-primary">Show Modal</a> </div>
                            <div id="success-modal-preview" class="modal" aria-hidden="true" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body p-0">
                                            <div class="p-5 text-center"> <i data-feather="check-circle"
                                                    class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                                <div class="text-3xl mt-5">Berhasil</div>
                                                <div class="text-gray-600 mt-2">{{ session()->get('message') }}</div>
                                            </div>
                                            <div class="px-5 pb-8 text-center"> <button data-dismiss="modal"
                                                    class="btn btn-primary w-24">Ok</button> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div> --}}


                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="flex max-w-7xl table-fixed">
                                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden ">
                                            <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                                <thead class="bg-white ">
                                                    <tr>


                                                        <th scope="col"
                                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase ">
                                                            Data
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200  ">
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Nama</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->name }}</td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            NPM</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->npm }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Email</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->email }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            No WA</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->phone }}</td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Status</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>


                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            @if ($user->users[0]->status == 'Sudah Tervalidasi')
                                                                <span
                                                                    class="bg-green-800 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Revisi')
                                                                <span
                                                                    class="bg-red-700 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Diproses')
                                                                <span
                                                                    class="bg-yellow-700 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Telah Diperbaiki')
                                                                <span
                                                                    class="bg-gray-600 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Validasi Akun')
                                                                <span
                                                                    class="bg-green-300 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Telah Upload Digilib')
                                                                <span
                                                                    class="bg-blue-800 text-white py-1 px-3 rounded-full text-xs">Telah
                                                                    Upload
                                                                    Digilib</span>
                                                            @endif


                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Validator</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->users[0]->validator }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Periode Wisuda</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->users[0]->periode_wisuda }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Tahun Wisuda</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->users[0]->tahun_wisuda }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Tanggal Upload</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->users[0]->created_at->format('d-m-Y h:m') }}
                                                        </td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Tanggal Edit</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->users[0]->updated_at->format('d-m-Y h:m') }}
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>


                            {{-- <div class=" flex justify-center">
                                <div class="mb-3 w-full ">
                                    <div
                                        class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                        <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Pesan
                                    </div>
                                    <label
                                        class="flex flex-col rounded-lg border-4 border-dashed w-full border-blue-200 h-auto p-2 group text-left">
                                        <h2>
                                            @if (empty($user->users[0]->message))
                                                Belum Ada Pesan, Berkas Kamu Belum di Proses.
                                            @else
                                                {{ $user->users[0]->message }}
                                            @endif
                                        </h2>
                                    </label>
                                </div>
                            </div> --}}

                            @if ($user->users[0]->status == 'Telah Upload Digilib' ||
                                $user->users[0]->status == 'Validasi Akun' ||
                                $user->users[0]->status == 'Revisi')
                                <div class=" flex justify-center">
                                    <div class="mb-3 w-full ">
                                        <form action="{{ route('update_repository', ['id' => $user->users[0]->id]) }}"
                                            method="POST">
                                            @method('PUT')
                                            @csrf
                                            <div
                                                class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                                <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Link Digilib
                                            </div>
                                            <div class="input-group mt-2">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->users[0]->link_repository }}"
                                                    placeholder="Masukan link digilib : http://digilib.unila.ac.id/63727/"
                                                    name="link_repository">
                                                <button type="submit"
                                                    class="input-group-text hover:bg-primary-1 hover:text-white">Masukan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            @endif


                            <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                                <div class="intro-y  col-span-4 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                                    <div
                                        class="file bg-gray-100 box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file1]) }}"
                                            class="w-3/5 file__icon file__icon--file mx-auto">
                                            <div class="file__icon__file-name">PDF</div>
                                        </a>
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file1]) }}"
                                            class="block font-medium mt-4 text-center truncate">File.pdf</a>
                                        <div class="text-gray-600 text-xs text-center mt-0.5">Surat Layak Upload</div>
                                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                aria-expanded="false"> <i data-feather="more-vertical"
                                                    class="w-5 h-5 text-gray-600"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="intro-y col-span-4 sm:col-span-2 md:col-span-3 2xl:col-span-2">
                                    <div
                                        class="file bg-gray-100  box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                                        <a href="{{ route('file1', ['path' => $user->users[0]->file2]) }}"
                                            class="w-3/5 file__icon file__icon--file mx-auto">
                                            <div class="file__icon__file-name">PDF</div>
                                        </a>
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file2]) }}"
                                            class="block font-medium mt-4 text-center truncate">File.pdf</a>
                                        <div class="text-gray-600 text-xs text-center mt-0.5">Surat Bebas Perpus</div>
                                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                aria-expanded="false"> <i data-feather="more-vertical"
                                                    class="w-5 h-5 text-gray-600"></i> </a>
                                        </div>
                                    </div>
                                </div>



                                @if ($user->users[0]->file3 != null)
                                    <div class="intro-y col-span-4 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                                        <div
                                            class="file bg-gray-100  box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                                            <a href="{{ route('file1', ['path' => $user->users[0]->file3]) }}"
                                                class="w-3/5 file__icon file__icon--file mx-auto">
                                                <div class="file__icon__file-name">PDF</div>
                                            </a>
                                            <a href="{{ route('file1', ['path' => $user->users[0]->file3]) }}"
                                                class="block font-medium mt-4 text-center truncate">File.Pdf</a>
                                            <div class="text-gray-600 text-xs text-center mt-0.5">TTD Bukti Sebar</div>
                                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                    aria-expanded="false"> <i data-feather="more-vertical"
                                                        class="w-5 h-5 text-gray-600"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif



                            </div>

                            <div class="intro-y grid grid-cols-2 gap-3 mt-5">
                                <div class="w-full h-64 my-5 image-fit"> <img
                                        src="{{ asset('storage' . '/' . $user->users[0]->ktm) }}" data-action="zoom"
                                        class="w-full rounded-md"> </div>
                                <div class="w-full h-64 my-5 image-fit"> <img
                                        src="{{ asset('storage' . '/' . $user->users[0]->photo) }}"
                                        data-action="zoom" class="w-full rounded-md"> </div>
                            </div>

                            {{-- <div class="intro-y grid sm:grid-cols-2 gap-3 mt-5">
                                <img class="rounded-lg shadow-lg ml-2" alt=""
                                    src="{{ asset('storage' . '/' . $user->users[0]->ktm) }}">
                                <img class="rounded-lg mr-2 shadow-lg" alt=""
                                    src="{{ asset('storage' . '/' . $user->users[0]->photo) }}">
                            </div> --}}
                        </div>

                        <a href="javascript:;" data-toggle="modal" data-target="#header-footer-modal-preview">
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Edit
                                    File
                                </button>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white rounded-md p-5">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header p-5">
                    <h2 class="font-medium text-base mr-auto">
                        Edit File
                    </h2>
                    <div class="dropdown sm:hidden">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false">
                        </a>

                    </div>
                </div>
                <!-- END: Modal Header -->
                <!-- BEGIN: Modal Body -->
                <form action="{{ route('transaction.update', ['id' => $user->users[0]->id]) }}"
                    enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-1" class="form-label">Dari</label>
                            <input id="modal-form-1" readonly value="{{ $user->name }}" class="form-control">
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Surat Layak
                                upload</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file1" name="file1" type="file">
                            @error('file1')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label sm:mt-10 inline-block mb-2 text-gray-700">Surat
                                Bebas
                                Perpus</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file2" name="file2" type="file">
                            @error('file2')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Bila ada berkas
                                yang
                                harus di tanda tangan sebagai <b> Bukti Sebar Karya Akhir </b> silahkan
                                isi</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file3" name="file3" type="file">
                            @error('file3')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input
                                KTM</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="ktm" name="ktm" type="file">
                            @error('ktm')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input
                                Photo</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="photo" name="photo" type="file">
                            @error('photo')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <!-- END: Modal Body -->
                    <!-- BEGIN: Modal Footer -->
                    <div class="modal-footer mt-5 text-right">
                        <button type="button" data-dismiss="modal"
                            class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                        <button type="submit" class="btn bg-green-700 text-white w-20">Save</button>
                    </div>
                    <!-- END: Modal Footer -->
                </form>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->




</x-app-layout>
