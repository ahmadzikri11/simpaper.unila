<x-app-layout>
    <!-- BEGIN: Content -->
    <div class="content">
        <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
            <h2 class="text-lg font-medium mr-auto">
                Validasi
            </h2>

            @if (session()->has('message'))
                <script>
                    window.onload = function() {
                        var button = document.getElementById('modalvalidasi');
                        button.click();

                        $(".modalvalidasi").hide();
                    }
                </script>
                <div class="text-center hidden"> <a href="javascript:;" id="modalvalidasi" data-toggle="modal"
                        data-target="#success-modal-preview" class="btn btn-primary">Show Modal</a> </div>
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

        </div>
        <h3 class="text-lg mt-5 font-medium mr-auto">
            Donwload File
        </h3>
        <div class="pos intro-y grid grid-cols-12 gap-5">
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
                            <a href="{{ route('file1', ['path' => $transaction->file1]) }}">
                                <div class="text-gray-600 text-xs text-center mt-0.5">Berkas Surat Layak
                                    Upload
                            </a>
                        </div>
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

                        <a href="{{ route('file2', ['path2' => $transaction->file2]) }}">
                            <div class="text-gray-600 text-xs text-center mt-0.5">Surat Bebas
                                perpus</div>
                        </a>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                    data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="intro-y col-span-6 sm:col-span-4 md:col-span-3 2xl:col-span-2">
                    @if ($transaction->file3 != null)
                        <div class="file box rounded-md px-5 pt-8 pb-5 px-3 sm:px-5 relative zoom-in">

                            <a href="{{ route('file3', ['path3' => $transaction->file3]) }}"
                                class="w-3/5 file__icon file__icon--file mx-auto">
                                <div class="file__icon__file-name">PDF</div>
                            </a>
                            <a href="{{ route('file3', ['path3' => $transaction->file3]) }}"
                                class="block font-medium mt-4 text-center truncate">File.Pdf
                            </a>
                            <a href="{{ route('file3', ['path3' => $transaction->file3]) }}" class="">
                                <div class="text-gray-600 text-xs text-center mt-0.5">Permohonan TTD Sebar Karya Akhir
                            </a>
                        </div>
                        <div class="absolute top-0 right-0 mr-2 mt-2 dropdown ml-auto">
                            <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i
                                    data-feather="more-vertical" class="w-5 h-5 text-gray-600"></i> </a>
                        </div>
                </div>
                @endif
            </div>


        </div>

        <div class="intro-y grid grid-cols-2 gap-3 mt-5">
            <div class="w-full h-64 my-5 image-fit"> <img src="{{ asset('storage' . '/' . $transaction->ktm) }}"
                    data-action="zoom" class="w-full rounded-md"> </div>
            <div class="w-full h-64 my-5 image-fit"> <img src="{{ asset('storage' . '/' . $transaction->photo) }}"
                    data-action="zoom" class="w-full rounded-md"> </div>
        </div>

        <div class="class intro-y mt-5 box p-5 flex">
            <h2>Link Digilib : </h2>
            <a class="text-blue-700 ml-2" target="_blank"
                href="{{ $transaction->link_repository }}">{{ $transaction->link_repository }}</a>
        </div>
        <div class=" w-full mt-5 flex">

            <a href="javascript:;" data-toggle="modal" data-target="#validasi"
                class="btn btn-primary mx-2 justify-center items-center"><i data-feather="edit"
                    class="w-4 h-4 mr-2"></i>Validasi Digilib</a>
            <a href="javascript:;" data-toggle="modal" data-target="#validasi_akun"
                class="btn btn-success mx-2 justify-center items-center"><i data-feather="user-check"
                    class="w-4 h-4 mr-2"></i>Validasi Akun</a>
            <a href="javascript:;" data-toggle="modal" data-target="#revisi"
                class="btn btn-danger  mx-2 justify-center items-center"><i data-feather="x-circle"
                    class="w-4 h-4 mr-2"></i>Revisi</a>

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
                        <div class="truncate">
                            {{ $transaction->created_at->format('d-m-Y H:i:s') }}</div>
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
                            {{ $transaction->updated_at->format('d-m-Y H:i:s') }}</div>
                    </div>
                </div>
            </div>

            <form action="{{ route('periode_wisuda', ['id' => $transaction->id]) }}" method="POST">
                @csrf
                <div>
                    <label class="mt-4 form-label">Periode Wisuda</label>
                    <select id="periode_wisuda" name="periode_wisuda" autocomplete="periode-name"
                        class="dropdown-toggle btn w-full btn-outline-secondary">

                        @if (empty($transaction->periode_wisuda))
                            <option value="">Pilih Periode</option>
                        @else
                            <option value="{{ $transaction->periode_wisuda }}">
                                {{ $transaction->periode_wisuda }} </option>
                        @endif
                        <option value="januari">Januari</option>
                        <option value="maret">Maret</option>
                        <option value="mei">Mei</option>
                        <option value="juli">Juli</option>
                        <option value="september">September</option>
                        <option value="november">November</option>
                    </select>
                    @error('periode_wisuda')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label class="mt-4 form-label">Tahun Wisuda</label>
                    <select id="tahun_wisuda" name="tahun_wisuda" autocomplete="periode-name"
                        class="dropdown-toggle btn w-full btn-outline-secondary margin-">
                        @if (empty($transaction->tahun_wisuda))
                            <option value=""> Pilih Tahun Wisuda </option>
                        @else
                            <option value="{{ $transaction->tahun_wisuda }}">
                                {{ $transaction->tahun_wisuda }} </option>
                        @endif

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
                    @error('tahun_wisuda')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="px-4 pt-4 text-right sm:px-1">
                    <button type="submit"
                        class="inline-flex justify-center bg-indigo-600 py-2 px-4 border shadow-sm text-sm font-medium rounded-md text-white">Save</button>
                </div>
            </form>
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
                            class="w-4 h-4 mr-2"></i> {{ $transaction->status }} </button>
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
                <form action="{{ route('validation.digilib', ['id' => $transaction->id]) }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="message" id="message"
                        class="form-control block w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $transaction->transactions->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $transaction->transactions->name }},
                                </textarea>

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
                                                value="Sudah Tervalidasi">
                                            <button class="p-3  btn btn-primary w-full  mb-2">
                                                <i data-feather="edit" class=" mr-2"></i>
                                                Validasi Digilib
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



    {{-- MODAl Validasi Akun --}}


    <div id="validasi_akun" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Validasi Akun / Berikan Akun</h2> <button
                        class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="alert-triangle"
                            class="w-4 h-4 mr-2"></i> {{ $transaction->status }} </button>
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
                <form action="{{ route('validation.accept', ['id' => $transaction->id]) }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="message" id="message"
                        class="form-control block h-52 w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $transaction->transactions->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Berikut adalah akun untuk masuk kedalam digilib.
username :
password :
Terimakasih, Silahkan Mengisi kedalam digilib.unila.ac.id
</textarea>




                    <div class="intro-y box mt-5 ml-5">
                        <div id="icon-button" class="">
                            <div class="preview">
                                <div class="flex ">
                                    <div>
                                        <input type="hidden" class="form-control" name="status" id="status"
                                            value="Validasi Akun">
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
    {{-- MODAl REvisi --}}
    <div id="revisi" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content p-4">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Revisi</h2> <button
                        class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="alert-triangle"
                            class="w-4 h-4 mr-2"></i> {{ $transaction->status }} </button>
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
                <form action="{{ route('validation.accept', ['id' => $transaction->id]) }}"
                    enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="message" id="message"
                        class="form-control block w-full px-10  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $transaction->transactions->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $transaction->transactions->name }},
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
                                            <div class="text-lg font-medium"> Upload Gambar Yang Perlu Direvisi
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
                                            value="Revisi">
                                        <button class="  btn btn-danger w-full  mb-2">
                                            <i data-feather="x-circle" class=" mr-2"></i>
                                            Revisi
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



    {{-- modal success --}}

</x-app-layout>
