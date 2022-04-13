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
                                <div class="flex justify-center">
                                    <div class="mb-3 w-full ">

                                        <textarea class="
                                          form-control block h-80 w-full  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                            id="exampleFormControlTextarea1" rows="3">Selamat siang users, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan users, kami ingin menginformasikan bahwa permohonan tersebut telah kami poroses. Kami menyimpulkan bahwa data kamu ...........
                                        </textarea>
                                    </div>
                                </div>
                                <div class="intro-y box mt-5">
                                    <div id="icon-button" class="p-5">
                                        <div class="preview">
                                            <div class="flex flex-wrap">
                                                <a href="javascript:;" data-toggle="modal"
                                                    data-target="#header-footer-modal-preview">
                                                    <button
                                                        class="btn btn-primary bg-green-600 text-white w-32 mr-2 mb-2">
                                                        <i data-feather="edit-3" class=" mr-2"></i> Validasi
                                                    </button>
                                                </a>

                                                <a href="javascript:;" data-toggle="modal"
                                                    data-target="#header-footer-modal-preview2">
                                                    <button
                                                        class="btn btn-primary bg-red-600 text-white w-32 mr-2 mb-2"> <i
                                                            data-feather="x-square" class="mr-2"></i> Tolak
                                                        File
                                                    </button>
                                                </a>

                                            </div>
                                        </div>
                                        <div class="source-code hidden">
                                            <button data-target="#copy-icon-button"
                                                class="copy-code btn py-1 px-2 btn-outline-secondary"> <i
                                                    data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code
                                            </button>
                                            <div class="overflow-y-auto mt-3 rounded-md">
                                                <pre id="copy-icon-button"
                                                    class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagbutton class=&quot;btn btn-primary w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;activity&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Activity HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-secondary w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;hard-drive&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Hard Drive HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-success w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;calendar&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Calendar HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-warning w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;share-2&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Share HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-danger w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;trash&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Trash HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-dark w-32 mr-2 mb-2&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;image&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Image HTMLOpenTag/buttonHTMLCloseTag </code> </pre>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
    <!-- END: Content -->

    {{-- hapus Transaksi Modal --}}
    <!-- BEGIN: Modal Content -->
    <div id="delete-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content bg-white rounded-md">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-feather="x-circle" class="w-16 h-16 text-theme-24 mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Apa Kamu Yakin?</div>
                        <div class="text-gray-600 mt-2">
                            Apakah Kamu yakin menghapus
                            <br>
                            data {{ $transaction->transactions->name }}?.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-dismiss="modal"
                            class="btn btn-outline-secondary w-24 dark:border-dark-5 dark:text-gray-300 mr-1">Cancel</button>

                        <a href="{{ route('delete.transaction', ['id' => $transaction->id]) }}">
                            <button type="button" class="btn btn-danger bg-red-500 text-white w-24">Delete</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

    {{-- modal Validasi --}}

    <div id="header-footer-modal" class="p-5 ">
        <div class="preview ">
            <!-- BEGIN: Modal Content -->
            <div id="header-footer-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog p-5 bg-white rounded-lg">
                    <div class="modal-content">
                        <!-- BEGIN: Modal Header -->
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">
                                Validasi File Skripsi
                            </h2>
                        </div>
                        <!-- END: Modal Header -->
                        <!-- BEGIN: Modal Body -->
                        <form action="{{ route('validation.accept', ['id' => $transaction->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-5 text-center"> <i data-feather="check-circle"
                                    class="w-16 h-16 text-theme-10 mx-auto mt-3"></i>
                                <div class="text-1xl mt-5">Validasi Skripsi
                                    {{ $transaction->transactions->name }}?.
                                </div>
                                <div class="modal-body grid grid-cols-2 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-6 mt-5">
                                        <input type="hidden" class="form-control" name="status" id="status"
                                            value="Sudah Tervalidasi">
                                        <label name="message" for="crud-form-4" class="form-label">Pesan</label>
                                        <input type="text" id="message" name="message" class="form-control"
                                            value="File Kamu sudah Kami Terima dan Validasi  -UPT Perpustakaan Unila"
                                            aria-describedby="input-group-2">

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer text-right">

                                <button type="button" data-dismiss="modal"
                                    class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                <button type="submit" class="btn bg-green-700 text-white w-20">Validasi</button>
                            </div>
                        </form>
                        <!-- END: Modal Footer -->
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-header-footer-modal" class="copy-code btn py-1 px-2 btn-outline-secondary">
                <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre id="copy-header-footer-modal"
                    class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-toggle=&quot;modal&quot; data-target=&quot;#header-footer-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;header-footer-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Header --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-header&quot;HTMLCloseTag HTMLOpenTagh2 class=&quot;font-medium text-base mr-auto&quot;HTMLCloseTagBroadcast MessageHTMLOpenTag/h2HTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-outline-secondary hidden sm:flex&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown sm:hidden&quot;HTMLCloseTag HTMLOpenTaga class=&quot;dropdown-toggle w-5 h-5 block&quot; href=&quot;javascript:;&quot; aria-expanded=&quot;false&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;more-horizontal&quot; class=&quot;w-5 h-5 text-gray-600 dark:text-gray-600&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTag/aHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown-menu w-40&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown-menu__content box dark:bg-dark-1 p-2&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; class=&quot;flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Header --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Body --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body grid grid-cols-12 gap-4 gap-y-3&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagFromHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagToHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-3&quot; class=&quot;form-label&quot;HTMLCloseTagSubjectHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-3&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Important Meeting&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-4&quot; class=&quot;form-label&quot;HTMLCloseTagHas the WordsHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-4&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Job, Work, Documentation&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-5&quot; class=&quot;form-label&quot;HTMLCloseTagDoesn&#039;t HaveHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-5&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Job, Work, Documentation&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-6&quot; class=&quot;form-label&quot;HTMLCloseTagSizeHTMLOpenTag/labelHTMLCloseTag HTMLOpenTagselect id=&quot;modal-form-6&quot; class=&quot;form-select&quot;HTMLCloseTag HTMLOpenTagoptionHTMLCloseTag10HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag25HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag35HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag50HTMLOpenTag/optionHTMLCloseTag HTMLOpenTag/selectHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Body --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Footer --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-footer text-right&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-dismiss=&quot;modal&quot; class=&quot;btn btn-outline-secondary w-20 mr-1&quot;HTMLCloseTagCancelHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; class=&quot;btn btn-primary w-20&quot;HTMLCloseTagSendHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Footer --HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
            </div>
        </div>
    </div>
    <!-- END: Validation Modal -->

    {{-- modal Reject --}}

    <div id="header-footer-modal2" class="p-5 ">
        <div class="preview ">
            <!-- BEGIN: Modal Content -->
            <div id="header-footer-modal-preview2" class="modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog p-5 bg-white rounded-lg">
                    <div class="modal-content">
                        <!-- BEGIN: Modal Header -->
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">
                                Validasi File Skripsi
                            </h2>


                        </div>
                        <!-- END: Modal Header -->
                        <!-- BEGIN: Modal Body -->
                        <form action="{{ route('validation.reject', ['id' => $transaction->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="p-5 text-center"> <i data-feather="x-circle"
                                    class="w-16 h-16 text-red-500 mx-auto mt-3"></i>
                                <div class="text-1xl mt-5">Tolak Validasi Skripsi
                                    {{ $transaction->transactions->name }}?.
                                </div>
                                <div class="modal-body grid grid-cols-2 gap-4 gap-y-3">
                                    <div class="col-span-12 sm:col-span-6 mt-5">
                                        <input type="hidden" class="form-control" name="status" id="status"
                                            value="Permintaan Ditolak">
                                        <label name="message" for="crud-form-4" class="form-label">Pesan</label>
                                        <input type="text" id="message" name="message" class="form-control"
                                            value="File Kamu Kami Tolak, Lengkapi File kamu Terlebih dahulu -UPT Perpustakaan Unila"
                                            aria-describedby="input-group-2">

                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer text-right">

                                <button type="button" data-dismiss="modal"
                                    class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                <button type="submit" class="btn bg-red-700 text-white w-20">Tolak</button>
                            </div>
                        </form>
                        <!-- END: Modal Footer -->
                    </div>
                </div>
            </div>
            <!-- END: Modal Content -->
        </div>
        <div class="source-code hidden">
            <button data-target="#copy-header-footer-modal2" class="copy-code btn py-1 px-2 btn-outline-secondary">
                <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
            <div class="overflow-y-auto mt-3 rounded-md">
                <pre id="copy-header-footer-modal2"
                    class="source-preview"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTag!-- BEGIN: Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-toggle=&quot;modal&quot; data-target=&quot;#header-footer-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;header-footer-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Header --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-header&quot;HTMLCloseTag HTMLOpenTagh2 class=&quot;font-medium text-base mr-auto&quot;HTMLCloseTagBroadcast MessageHTMLOpenTag/h2HTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-outline-secondary hidden sm:flex&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown sm:hidden&quot;HTMLCloseTag HTMLOpenTaga class=&quot;dropdown-toggle w-5 h-5 block&quot; href=&quot;javascript:;&quot; aria-expanded=&quot;false&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;more-horizontal&quot; class=&quot;w-5 h-5 text-gray-600 dark:text-gray-600&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTag/aHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown-menu w-40&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown-menu__content box dark:bg-dark-1 p-2&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; class=&quot;flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md&quot;HTMLCloseTag HTMLOpenTagi data-feather=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Header --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Body --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body grid grid-cols-12 gap-4 gap-y-3&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-1&quot; class=&quot;form-label&quot;HTMLCloseTagFromHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-1&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-2&quot; class=&quot;form-label&quot;HTMLCloseTagToHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-2&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;example@gmail.com&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-3&quot; class=&quot;form-label&quot;HTMLCloseTagSubjectHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-3&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Important Meeting&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-4&quot; class=&quot;form-label&quot;HTMLCloseTagHas the WordsHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-4&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Job, Work, Documentation&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-5&quot; class=&quot;form-label&quot;HTMLCloseTagDoesn&#039;t HaveHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput id=&quot;modal-form-5&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Job, Work, Documentation&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-form-6&quot; class=&quot;form-label&quot;HTMLCloseTagSizeHTMLOpenTag/labelHTMLCloseTag HTMLOpenTagselect id=&quot;modal-form-6&quot; class=&quot;form-select&quot;HTMLCloseTag HTMLOpenTagoptionHTMLCloseTag10HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag25HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag35HTMLOpenTag/optionHTMLCloseTag HTMLOpenTagoptionHTMLCloseTag50HTMLOpenTag/optionHTMLCloseTag HTMLOpenTag/selectHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Body --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Footer --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-footer text-right&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-dismiss=&quot;modal&quot; class=&quot;btn btn-outline-secondary w-20 mr-1&quot;HTMLCloseTagCancelHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; class=&quot;btn btn-primary w-20&quot;HTMLCloseTagSendHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Footer --HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
            </div>
        </div>
    </div>

    <!-- END:  Modal Reject -->

</x-app-layout>
