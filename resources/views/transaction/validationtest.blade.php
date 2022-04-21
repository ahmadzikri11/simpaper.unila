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


                <div class="post intro-y overflow-hidden box mt-5">
                    <div class="post__content tab-content">
                        <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                            <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                                <div
                                    class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                                    <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Validasi Skripsi
                                </div>
                                <div class="mt-5">
                                    {{-- <form
                                        action="{{ route('validation.message', ['phone' => $transaction->transactions->phone]) }}"
                                        method="POST">
                                        <label name="message" for="crud-form-4" class="form-label">Pesan</label>
                                        <input type="text" id="message" name="message" class="form-control"
                                            placeholder="ex: Skripsi Anda sudah Kami Validasi"
                                            aria-describedby="input-group-2">
                                        {{-- <div class="input-group">

                                        <button id="input-group-2" type="submit" class="input-group-text">Kirim</button>
                                    </div> --}}
                                    </form>
                                </div>
                            </div>
                            <div class="intro-y box mt-5">
                                <div id="icon-button" class="p-5">
                                    <div class="preview">
                                        <div class="flex flex-wrap">
                                            <button class="btn btn-primary bg-green-600 text-white w-32 mr-2 mb-2"
                                                onclick="toggleModal('modal-id')"> <i data-feather="activity"
                                                    class="w-4 h-4 mr-2"></i> Validasi </button>
                                            <button class="btn btn-primary bg-yellow-600 text-white w-32 mr-2 mb-2"
                                                onclick="toggleModalReject('modal-id-reject')"> <i
                                                    data-feather="hard-drive" class="w-4 h-4 mr-2"></i> Revisi
                                            </button>

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
                                <div class="truncate">{{ $transaction->transactions->npm }} </div>
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
                                <div class="truncate">{{ $transaction->transactions->email }}</div>
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
                                <div class="truncate">{{ $transaction->transactions->npm }} </div>
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
                                <div class="truncate"> {{ $transaction->created_at }}</div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- END: Post Info -->
        </div>
    </div>
    <!-- END: Content -->




</x-app-layout>
