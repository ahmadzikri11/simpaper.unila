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
                                        <div class="text-gray-600 text-xs text-center mt-0.5">KTM
                                            
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
                                        <form action="{{ route('accept.skbp', ['id' => $skbp->id]) }}"
                                            enctype="multipart/form-data" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class=" flex justify-center">
                                                <div class="mb-3 w-full ">
                
                                                    <textarea name="message" id="message"
                                                        class="
                                                          form-control block h-80 w-full  px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "
                                                        id="exampleFormControlTextarea1" rows="3">Selamat siang {{ $skbp->getskbp->name }}, Kami dari UPT Perpustakaan Universitas Lampung. Atas permohonan {{ $skbp->getskbp->name }}, kami ingin menginformasikan bahwa permohonan tersebut telah kami poroses. Kami menyimpulkan bahwa data kamu ...........
                                                        </textarea>
                                                </div>
                                            </div>
                
                                            <div id="faq-accordion-1" class="accordion p-5">
                                                <div class="accordion-item">
                                                    <div id="faq-accordion-content-2" class="accordion-header">
                                                        <button class="accordion-button flex collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2"
                                                            aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                                            Upload File Tanda Terima <svg xmlns="http://www.w3.org/2000/svg"
                                                                class="h-4 w-4 mt-1 ml-1 " fill="none" viewBox="0 0 24 24"
                                                                stroke="currentColor" stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                                            </svg>
                                                        </button>
                                                        
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

                                            <div class="intro-y box  mt-5">
                                                <div id="icon-button" class="">
                                                    <div class="preview">
                                                        <div class="flex ">
                                                            {{-- <div>
                                                                <input type="hidden" class="form-control" name="status" id="status"
                                                                    value="Sudah Tervalidasi">
                                                                <button class="btn btn-primary bg-green-600 text-white w-full  mb-2">
                                                                    <i data-feather="link-2" class=" mr-2"></i>
                                                                    Validasi Digilib
                                                                </button>
                                                            </div> --}}
                                                            <div>
                
                                                                <button class="btn btn-primary bg-green-600 text-white w-full ml-2 mb-2"
                                                                    name="status" value="Tervalidasi" type="submit">
                                                                    <i data-feather="user" class="mr-2"></i>
                                                                    Validasi Persyaratan
                                                                </button>
                                                            </div>
                
                
                                                            <div class="ml-2">
                
                                                                <button
                                                                    class="btn btn-primary bg-yellow-500 text-white w-full ml-2 mb-2"
                                                                    name="status" value="Revisi" type="submit">
                                                                    <i data-feather="info" class="mr-2"></i>
                                                                    Revisi Persyaratan
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

            {{-- <form action="{{ route('periode_wisuda', ['id' => $skbp->id]) }}" method="POST">
                @csrf
                <div>
                    <label class="mt-4 form-label">Periode Wisuda</label>
                    <select id="periode_wisuda" name="periode_wisuda" autocomplete="periode-name"
                        class="dropdown-toggle btn w-full btn-outline-secondary">

                        @if (empty($skbp->periode_wisuda))
                            <option value="">Pilih Periode</option>
                        @else
                            <option value="{{ $skbp->periode_wisuda }}">
                                {{ $skbp->periode_wisuda }} </option>
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
                        @if (empty($skbp->tahun_wisuda))
                            <option value=""> Pilih Tahun Wisuda </option>
                        @else
                            <option value="{{ $skbp->tahun_wisuda }}">
                                {{ $skbp->tahun_wisuda }} </option>
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
            </form> --}}
        </div>
    </div>
    <!-- END: Post Info -->
    </div>
 </div>
                                          
                
</x-app-layout>