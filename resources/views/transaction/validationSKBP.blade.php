<x-app-layout>
    <!-- BEGIN: Content -->
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Validasi
            </h2>


        </div>
        <h3 class="text-lg mt-5 font-medium mr-auto">
            Download File
            {{-- {{ $skbp->ktm }} ||||| {{ $skbp->spp }} --}}
        </h3>
        <div class="pos intro-y grid grid-cols-12 gap-5">
            <!-- BEGIN: Post Content -->
            <div class="intro-y col-span-12 lg:col-span-8">
                <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5">
                    <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                            <form id="form-submit" action="{{ route('fileSkbp') }}" method="POST">
                                @csrf
                                <input name="pathfile" type="hidden" value="{{ $skbp->ktm }}">
                                <a href="#" onclick="document.getElementById('form-submit').submit();"
                                    class="w-3/5 file__icon file__icon--file mx-auto">
                                    <div class="file__icon__file-name">PDF</div>
                                </a>
                                <a href="#" onclick="document.getElementById('form-submit').submit();"
                                    class="block font-medium mt-4 text-center truncate">File.pdf</a>
                                <a href="#" onclick="document.getElementById('form-submit').submit();">
                                    <div class="text-gray-600 text-xs text-center mt-0.5">KTM

                                </a>
                            </form>
                        </div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                    data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                        </div>
                    </div>
                </div>


                {{-- <div class="intro-y grid grid-cols-12 gap-3 sm:gap-6 mt-5"> --}}
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                    <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">
                        <form id="form-submit2" action="{{ route('fileSkbp2') }}" method="POST">
                            @csrf
                            <input name="pathfile2" type="hidden" value="{{ $skbp->spp }}">
                            <a href="#" onclick="document.getElementById('form-submit2').submit();"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="#" onclick="document.getElementById('form-submit2').submit();"
                                class="block font-medium mt-4 text-center truncate">File.pdf</a>
                            <a href="#" onclick="document.getElementById('form-submit2').submit();">
                                <div class="text-gray-600 text-xs text-center mt-0.5">UKT

                            </a>
                        </form>
                    </div>
                    <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                    </div>
                </div>
            </div>


            <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                    <form id="form-submit3" action="{{ route('fileSkbp3') }}" method="POST">
                        @csrf
                        <input name="pathfile3" type="hidden" value="{{ $skbp->bukti }}">
                        <a href="#" onclick="document.getElementById('form-submit3').submit();"
                            class="w-3/5 file__icon file__icon--file mx-auto">
                            <div class="file__icon__file-name">PNG</div>
                        </a>
                        <a href="#" onclick="document.getElementById('form-submit3').submit();"
                            class="block font-medium mt-4 text-center truncate">File.pdf</a>
                        <a href="#" onclick="document.getElementById('form-submit3').submit();">
                            <div class="text-gray-600 text-xs text-center mt-0.5">Bukti Pembayaran

                        </a>
                    </form>
                    <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                        <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="post intro-y overflow-hidden box mt-5">
        <div class="post__content tab-content">
            <div id="content" class="tab-pane p-5 active" role="tabpanel" aria-labelledby="content-tab">
                <div class="border border-gray-200 dark:border-dark-5 rounded-md p-5">
                    <div class="font-medium flex items-center border-b border-gray-200 dark:border-dark-5 pb-5">
                        <i data-feather="chevron-down" class="w-4 h-4 mr-2"></i> Pesan
                    </div>
                    <form action="{{ route('accept.skbp', ['id' => $skbp->id]) }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
                        @method('PUT')
                        {{-- <div class=" flex justify-center">
                            <div class="mb-3 w-full ">

                                <textarea name="message" id="message"
                                    class="
                                                          form-control block h-80 w-full  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                    id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $skbp->getskbp->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $skbp->getskbp->name }}, kami ingin menginformasikan bahwa permohonan tersebut telah kami poroses. Kami menyimpulkan bahwa data kamu ...........
                                                        </textarea>
                            </div>
                        </div> --}}

                        <div id="faq-accordion-1" class="accordion p-5">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    {{-- <button class="accordion-button flex collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2"
                                        aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        Upload File Tanda Terima <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 mt-1 ml-1 " fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                        </svg>
                                    </button> --}}

                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                    <div class="intro-y box">
                                        <div
                                            class="flex flex-col sm:flex-row items-center p-5 border-b bg-white shadow-md dark:border-dark-5">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700"><img
                                                    src="{{ asset('images/surat.png') }}" class="  w-60"
                                                    alt="description of myimage"></label>
                                            <div id="single-file-upload" class="p-5 ">
                                                <div class="fallback">
                                                    <input name="attachment" type="file" />
                                                </div>
                                                <div class="dz-message" data-dz-message>
                                                    <div class="text-lg font-medium"> Upload File Revisi atau Tanda
                                                        Terima
                                                    </div>
                                                    <div class="text-gray-600">click and upload file
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" w-full mt-5 flex">

                            <a href="javascript:;" data-toggle="modal" data-target="#validasi"
                                class="btn btn-primary mx-2 justify-center items-center"><i data-feather="edit"
                                    class="w-4 h-4 mr-2"></i>Validasi SKBP</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#virtual_akun"
                                class="btn btn-success mx-2 justify-center items-center"><i data-feather="user-check"
                                    class="w-4 h-4 mr-2"></i>Virtual Account</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#revisi"
                                class="btn btn-danger  mx-2 justify-center items-center"><i data-feather="x-circle"
                                    class="w-4 h-4 mr-2"></i>Revisi</a>

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
                        <div class="truncate"> {{ $skbp->getskbp->name }}</div>
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
                        <div class="truncate"> {{ $skbp->getskbp->npm }}</div>
                    </div>
                </div>
            </div>
            <div>
                <label class=" mt-4 form-label">Alamat</label>
                <div class="dropdown">
                    <div class="dropdown-toggle btn w-full btn-outline-secondary dark:bg-dark-2 dark:border-dark-2 flex items-center justify-start"
                        role="button" aria-expanded="false">
                        <div class="w-6 h-6 image-fit mr-3">
                        </div>
                        <div class="truncate"> {{ $skbp->getskbp->alamat }}</div>
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
                        <div class="truncate"> {{ $skbp->getskbp->getfakultas->fakultas }}
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
                        <div class="truncate"> {{ $skbp->getskbp->getprodi->prodi }}</div>
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
                        <div class="truncate"> {{ $skbp->getskbp->email }}</div>
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
                        <div class="truncate"> {{ $skbp->getskbp->phone }}</div>
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
                            {{ $skbp->created_at->format('d-m-Y H:i:s') }}</div>
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
                            {{ $skbp->updated_at->format('d-m-Y H:i:s') }}</div>
                    </div>
                </div>
            </div>


            <!-- END: Post Info -->
        </div>
    </div>


    {{-- MODAl Validasi --}}
    <div id="validasi" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Validasi</h2> <button
                        class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="alert-triangle"
                            class="w-4 h-4 mr-2"></i> {{ $skbp->status }} </button>
                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                            aria-expanded="false"> <i data-feather="more-horizontal"
                                class="w-5 h-5 text-gray-600 dark:text-gray-600"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2"> <a href="javascript:;"
                                    class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                        </div>
                    </div>
                </div>

                <form action=""></form>
                <form action="{{ route('accept.skbp', ['id' => $skbp->id]) }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <label for="crud-form-3" class="form-label mt-5">Pesan</label>
                    <textarea name="message" id="message"
                        class="form-control block w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $skbp->getskbp->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $skbp->getskbp->name }},
                            </textarea>
                    <label for="crud-form-3" class="form-label mt-5 ">Nomer Surat</label>
                    <input id="crud-form-3 " type="text" class="form-control px-10" placeholder="Quantity"
                        value="4358/UN26.31.01/PK.35/2022" name="no_surat" aria-describedby="input-group-1">
                    {{-- <label for="crud-form-3" class="form-label mt-5 ">Permohonan TTD Sebar Karya Akhir</label>
                <input id="crud-form-3 " type="file" class="form-control px-10" placeholder="Quantity"
                    name="attachment" aria-describedby="input-group-1"> --}}
                    <div class="p-5">
                        <div id="faq-accordion-content-2" class="accordion-header">
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                            aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                            <div class="intro-y box">

                            </div>


                        </div>


                        <div class="intro-y box mt-5 ml-5">
                            <div id="icon-button" class="">
                                <div class="preview">
                                    <div class="flex ">
                                        <div>
                                            <input type="hidden" class="form-control" name="status" id="status"
                                                value="Tervalidasi">
                                            <button class="p-3  btn btn-primary w-full  mb-2">
                                                <i data-feather="edit" class=" mr-2"></i>
                                                Validasi SKBP
                                            </button>
                                        </div>
                                        <div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </form>

            </div>
        </div>
    </div>


    {{-- MODAl VIRTUAL ACCOUNT --}}
    <div id="virtual_akun" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Virtual Akun</h2> <button
                        class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="alert-triangle"
                            class="w-4 h-4 mr-2"></i> {{ $skbp->status }} </button>
                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                            aria-expanded="false"> <i data-feather="more-horizontal"
                                class="w-5 h-5 text-gray-600 dark:text-gray-600"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2"> <a href="javascript:;"
                                    class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('akun.accept', ['id' => $skbp->id]) }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="message" id="message"
                        class="form-control block w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $skbp->getskbp->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $skbp->getskbp->name }},
                                </textarea>

                    <div class="p-5">
                        <div id="faq-accordion-content-2" class="accordion-header">
                        </div>
                        <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                            aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                            <div class="intro-y box">
                                <div
                                    class="flex flex-col sm:flex-row items-center p-5 border-b bg-white shadow-md dark:border-dark-5">
                                    <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700"><img
                                            src="{{ asset('images/surat.png') }}" class="  w-60"
                                            alt="description of myimage"></label>
                                    <div id="single-file-upload" class="p-5 ">
                                        <div class="fallback">
                                            <input name="attachment" type="file" />
                                        </div>
                                        <div class="dz-message" data-dz-message>
                                            <div class="text-lg font-medium"> Upload File Yang Perlu Direvisi
                                            </div>
                                            <div class="text-gray-600">click and upload file
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>


                    <div class="intro-y box mt-5 ml-5">
                        <div id="icon-button" class="">
                            <div class="preview">
                                <div class="flex ">
                                    <div>
                                        <input type="hidden" class="form-control" name="status" id="status"
                                            value="virtual_akun">
                                        <button class=" btn btn-success w-full mb-2 ">
                                            <i data-feather="user" class=" mr-2"></i>
                                            Virtual Akun
                                        </button>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>


    {{-- MODAl REVISI --}}


    <div id="revisi" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Revisi</h2> <button
                        class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="alert-triangle"
                            class="w-4 h-4 mr-2"></i> {{ $skbp->status }} </button>
                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;"
                            aria-expanded="false"> <i data-feather="more-horizontal"
                                class="w-5 h-5 text-gray-600 dark:text-gray-600"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2"> <a href="javascript:;"
                                    class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('akun.accept', ['id' => $skbp->id]) }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="message" id="message"
                        class="form-control block h-52 w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $skbp->getskbp->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Kami telah meriview persyaratan yang telah anda lampirkan dan terdapat kesalahan pada bagian........

                            Silahkan isi kembali persyaratan dengan cermat,
                            Terimakasih. 
                    </textarea>


                    <div class="intro-y box mt-5 ml-5">
                        <div id="icon-button" class="">
                            <div class="preview">
                                <div class="flex ">
                                    <div>
                                        <input type="hidden" class="form-control" name="status" id="status"
                                            value="Revisi">
                                        <button class="btn btn-success w-full mb-2">
                                            <i data-feather="user" class=" mr-2"></i>
                                            Validasi Akun
                                        </button>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>



</x-app-layout>
