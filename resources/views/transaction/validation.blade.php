<x-app-layout>
    <!-- BEGIN: Content -->
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Validation
            </h2>

        </div>
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
            <!-- BEGIN: Post Content -->
            <div class="intro-y col-span-12 lg:col-span-8">
                <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <a href="{{ route('file1', ['path' => $transaction->file1]) }}"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="{{ route('file1', ['path' => $transaction->file1]) }}"
                                class="block font-medium mt-4 text-center truncate">File.pdf</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">Skripsi</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                        data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                            <a href="{{ route('file2', ['path2' => $transaction->file2]) }}"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="{{ route('file2', ['path2' => $transaction->file2]) }}"
                                class="block font-medium mt-4 text-center truncate">File.pdf</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">Surat1</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                        data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                            </div>
                        </div>
                    </div>

                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                            <a href="{{ route('file3', ['path3' => $transaction->file3]) }}"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="{{ route('file3', ['path3' => $transaction->file3]) }}"
                                class="block font-medium mt-4 text-center truncate">File.Pdf</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">Surat2</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                        data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                            <a href="{{ route('file4', ['path4' => $transaction->file4]) }}"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="{{ route('file4', ['path4' => $transaction->file4]) }}"
                                class="block font-medium mt-4 text-center truncate">File.Pdf</a>
                            <div class="text-gray-600 text-xs text-center mt-0.5">Surat2</div>
                            <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                                <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                        data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="intro-y grid grid-cols-2 gap-3 mt-5">
                    <img class="rounded-lg shadow-lg ml-2" alt=""
                        src="{{ asset('storage' . '/' . $transaction->ktm) }}">
                    <img class="rounded-lg mr-2 shadow-lg" alt=""
                        src="{{ asset('storage' . '/' . $transaction->photo) }}">
                </div>

                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__content tab-content">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div
                                    class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                    <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Pesan
                                </div>
                                <form action="{{ route('validation.accept', ['id' => $transaction->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="flex justify-center">
                                        <div class="mb-3 w-full ">

                                            <textarea name="message" id="message" class="
                                          form-control block h-80 w-full  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $transaction->transactions->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan users, kami ingin menginformasikan bahwa permohonan tersebut telah kami poroses. Kami menyimpulkan bahwa data kamu ...........
                                        </textarea>
                                        </div>
                                    </div>
                                    <div class="intro-y box mt-5">
                                        <div id="icon-button" class="p-5">
                                            <div class="preview">
                                                <div class="flex flex-wrap">
                                                    <div>
                                                        <input type="hidden" class="form-control" name="status"
                                                            id="status" value="Sudah Tervalidasi">
                                                        <button
                                                            class="btn btn-primary bg-green-600 text-white w-32 mr-2 mb-2">
                                                            <i data-feather="edit-3" class=" mr-2"></i>
                                                            Validasi
                                                        </button>
                                                    </div>

                                                    <div>

                                                        <button
                                                            class="btn btn-primary bg-yellow-500 text-white w-32 mr-2 mb-2"
                                                            name="status" value="Revisi" type="submit">
                                                            <i data-feather="info" class="mr-2"></i>
                                                            Revisi
                                                        </button>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Content -->
            <!-- BEGIN: Post Info -->
            <div class="col-span-12 lg:col-span-4">
                <div class="intro-y box p-5">
                    <div>
                        <label class="form-label">Penulis</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->name }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class=" mt-4 form-label">NPM</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->npm }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class=" mt-4 form-label">Fakultas</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->getfakultas->fakultas }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class=" mt-4 form-label">Jurusan</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->getprodi->prodi }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class=" mt-4 form-label">Email</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->email }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mt-4 form-label">No Whatsapps</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->phone }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mt-4 form-label">Waktu Upload</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate"> {{ $transaction->transactions->updated_at }}</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END: Post Info -->
        </div>
    </div>


</x-app-layout>
