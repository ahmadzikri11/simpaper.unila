<x-app-layout>

    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Status</div>
    @endsection
    <div class="max-w-7xl mt-7 mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Status Validasi</h3>
                        <p class="mt-1 text-sm text-gray-600"> File Skripsi</p>
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


                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="flex max-w-7xl table-fixed">
                                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden ">
                                            <table
                                                class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                <thead class="bg-white dark:bg-gray-700">
                                                    <tr>


                                                        <th scope="col"
                                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                            Data
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody
                                                    class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Nama</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->name }}</td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            NPM</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->npm }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Email</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->email }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Phone</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->phone }}</td>
                                                    </tr>



                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Status</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>


                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            @if ($user->users[0]->status == 'Sudah Tervalidasi')
                                                                <span
                                                                    class="bg-green-700 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Revisi')
                                                                <span
                                                                    class="bg-red-700 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @elseif ($user->users[0]->status == 'Diproses')
                                                                <span
                                                                    class="bg-yellow-700 text-white py-1 px-3 rounded-full text-xs">{{ $user->users[0]->status }}</span>
                                                            @endif
                                                        </td>
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Periode Wisuda</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->users[0]->periode_wisuda }}</td>
                                                    </tr>
                                                    <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            Token</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                            :</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                            {{ $user->users[0]->token }}</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                                <div class="intro-y  col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                                    <div
                                        class="file bg-gray-100 box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file1]) }}"
                                            class="w-3/5 file__icon file__icon--file mx-auto">
                                            <div class="file__icon__file-name">PDF</div>
                                        </a>
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file1]) }}"
                                            class="block font-medium mt-4 text-center truncate">File.pdf</a>
                                        <div class="text-gray-600 text-xs text-center mt-0.5">Surat Layak upload</div>
                                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                aria-expanded="false"> <i data-feather="more-vertical"
                                                    class="w-5 h-5 text-gray-600"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
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

                                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                                    <div
                                        class="file bg-gray-100  box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                                        <a href="{{ route('file1', ['path' => $user->users[0]->file3]) }}"
                                            class="w-3/5 file__icon file__icon--file mx-auto">
                                            <div class="file__icon__file-name">PDF</div>
                                        </a>
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file3]) }}"
                                            class="block font-medium mt-4 text-center truncate">File.Pdf</a>
                                        <div class="text-gray-600 text-xs text-center mt-0.5">slip Pembayaran Ukt</div>
                                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                aria-expanded="false"> <i data-feather="more-vertical"
                                                    class="w-5 h-5 text-gray-600"></i> </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                                    <div
                                        class="file bg-gray-100  box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                                        <a href="{{ route('file1', ['path' => $user->users[0]->file4]) }}"
                                            class="w-3/5 file__icon file__icon--file mx-auto">
                                            <div class="file__icon__file-name">PDF</div>
                                        </a>
                                        <a href="{{ route('file1', ['path' => $user->users[0]->file4]) }}"
                                            class="block font-medium mt-4 text-center truncate">File.Pdf</a>
                                        <div class="text-gray-600 text-xs text-center mt-0.5">Bukti Pembayaran KI
                                        </div>
                                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                                                aria-expanded="false"> <i data-feather="more-vertical"
                                                    class="w-5 h-5 text-gray-600"></i> </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="intro-y grid grid-cols-2 gap-3 mt-5">
                                <img class="rounded-lg shadow-lg ml-2" alt=""
                                    src="{{ asset('storage' . '/' . $user->users[0]->ktm) }}">
                                <img class="rounded-lg mr-2 shadow-lg" alt=""
                                    src="{{ asset('storage' . '/' . $user->users[0]->photo) }}">
                            </div>
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
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i>
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
                        {{-- <div class=" col-span-12 sm:col-span-6">
                            <label for="modal-form-2" class="form-label">Token</label>
                            <input id="modal-form-2" type="text" name="token" class="form-control"
                                value=" {{ $user->users[0]->token }}">
                        </div> --}}
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
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Surat Bebas
                                Perpus</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file2" name="file2" type="file">
                            @error('file2')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Slip Pembayaran
                                Ukt</label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file3" name="file3" type="file">
                            @error('file3')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Bukti
                                Pembayaran Karya Ilmiah <br> * Untuk FP,FMIPA,FEB dan FK.
                            </label>
                            <input
                                class="form-control block w-full px-2 py-1 text-sm font-normal text-gray-700  bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="file4" name="file4" type="file">
                            @error('file4')
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
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-6" name="periode_wisuda" class="form-label">Periode
                                Wisuda</label>
                            <select name="periode_wisuda" id="modal-form-6" class="form-select">
                                <option value="{{ $user->users[0]->periode_wisuda }}">
                                    {{ $user->users[0]->periode_wisuda }}</option>
                                <option value="januari">Januari</option>
                                <option value="maret">Maret</option>
                                <option value="mei">Mei</option>
                                <option value="juli">Juli</option>
                                <option value="september">September</option>
                                <option value="november">November</option>
                            </select>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label for="modal-form-6" name="tahun_wisuda" class="form-label">Tahun
                                Wisuda</label>
                            <select name="tahun_wisuda" id="modal-form-6" class="form-select">
                                <option value="{{ $user->users[0]->tahun_wisuda }}">
                                    {{ $user->users[0]->tahun_wisuda }}</option>
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
