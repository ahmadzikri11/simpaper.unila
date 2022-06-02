<x-app-layout>
    <!-- BEGIN: Content -->
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Validation
            </h2>



        </div>

        <div class="pos intro-y grid grid-cols-12 gap-5">
            <!-- BEGIN: Post Content -->
            <div class="intro-y col-span-12 lg:col-span-8">

                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__content tab-content">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div
                                    class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                    <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Pesan
                                </div>
                                <form action="{{ route('repository_validation_accept', ['id' => $repository->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class=" flex justify-center">
                                        <div class="mb-3 w-full ">

                                            <textarea name="message" id="message" class="
                                          form-control block h-80 w-full  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                id="exampleFormControlTextarea1" rows="3">hai {{ $repository->getuserrepo->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Kami sudah Cek Link DIgilib Kamu.
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
                                <div class="truncate"> {{ $repository->getuserrepo->name }}</div>
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
                                <div class="truncate"> {{ $repository->getuserrepo->npm }}</div>
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
                                <div class="truncate"> {{ $repository->getuserrepo->getfakultas->fakultas }}
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
                                <div class="truncate"> {{ $repository->getuserrepo->getprodi->prodi }}</div>
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
                                <div class="truncate"> {{ $repository->getuserrepo->email }}</div>
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
                                <div class="truncate"> {{ $repository->getuserrepo->phone }}</div>
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
                                <div class="truncate">
                                    {{ $repository->created_at->format('d-m-Y H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mt-4 form-label">Waktu Update</label>
                        <div class="dropdown">
                            <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                                role="button" aria-expanded="false">
                                <div class="w-6 h-6 image-fit mr-3">
                                </div>
                                <div class="truncate">
                                    {{ $repository->updated_at->format('d-m-Y H:i:s') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Post Info -->
        </div>
    </div>


</x-app-layout>
