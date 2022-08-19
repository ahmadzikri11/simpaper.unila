<x-app-layout>
    @section('navi')
        <div>Simpaper</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Dashboard</div>
    @endsection
    <div class="col-span-12 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
                Dashboard
            </h2>
        </div>

        @if (auth()->user()->role == 'admin')
            <section>
                <div class="grid grid-cols-12 gap-6 mt-5 mb-10">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="users" class="report-box__icon text-theme-21"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-26 tooltip cursor-pointer"
                                            title="Total">
                                            Total Account
                                            <i data-feather="chevron-right" class="w-4 h-4 ml-0.5"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $user }}</div>
                                <div class="text-base text-gray-600 mt-1">Total User</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="inbox" class="report-box__icon text-theme-22"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-22 tooltip cursor-pointer"
                                            title="Total Script"> Total Upload <i data-feather="chevron-right"
                                                class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $transaction }}</div>
                                <div class="text-base text-gray-600 mt-1">Total File Upload</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="edit" class="report-box__icon text-theme-23"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-23 tooltip cursor-pointer"
                                            title="Total Unprosses"> Total belum Diproses<i data-feather="chevron-right"
                                                class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $transactionproses }}</div>
                                <div class="text-base text-gray-600 mt-1">Total File Yang belum diproses</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="file-text" class="report-box__icon text-theme-10"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-10 tooltip cursor-pointer"
                                            title="Total been Processed"> Total Selesai Diproses<i
                                                data-feather="chevron-right" class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $transactionaccept }}</div>
                                <div class="text-base text-gray-600 mt-1">Total Selesai Diproses
                                    {{ $transactionproses }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <a href="{{ route('graph.helpdesk') }}" class="dashboard">
                    <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                        <div class="report-box zoom-in">
                            <div class="box p-5">
                                <div class="flex">
                                    <i data-feather="edit" class="report-box__icon text-theme-23"></i>
                                    <div class="ml-auto">
                                        <div class="report-box__indicator bg-theme-23 tooltip cursor-pointer"
                                            title="Total Unprosses"> Prioritas<i data-feather="chevron-right"
                                                class="w-4 h-4 ml-0.5"></i> </div>
                                    </div>
                                </div>
                                <div class="text-3xl font-medium leading-8 mt-6">{{ $prioritastotal }}</div>
                                <div class="text-base text-gray-600 mt-1">Total Data</div>
                            </div>
                        </div>
                    </div>
                </a>
                {{-- <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
                    <div class="report-box zoom-in">
                        <div class="box p-5">
                            <div class="flex">
                                <i data-feather="edit" class="report-box__icon text-theme-23"></i>
                                <div class="ml-auto">
                                    <div class="report-box__indicator bg-theme-23 tooltip cursor-pointer"
                                        title="Total Unprosses"> Prioritas<i data-feather="chevron-right"
                                            class="w-4 h-4 ml-0.5"></i> </div>
                                </div>
                            </div>
                            <div class="text-3xl font-medium leading-8 mt-6">{{ $proditotal }}</div>
                            <div class="text-base text-gray-600 mt-1">Total File Yang belum diproses</div>
                        </div>
                    </div>
                </div> --}}
            </section>
        @endif











        @if (auth()->user()->role == 'user')
            <div class="intro-y  sm:py-5 ">
                <div class="px-5  sm:px-20">
                    <h3 class="text-lg font-medium truncate mr-5"> <i data-feather="refresh-cw"></i>
                        Alur Sistem
                    </h3>
                    <div class="intro-x flex  items-center">
                        <div id="faq-accordion-1" class="accordion p-5">
                            <div class="accordion-item">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#faq-accordion-collapse-2" aria-expanded="false"
                                        aria-controls="faq-accordion-collapse-2">
                                        <div class="class flex">

                                            <div class="w-10 h-10 bg-blue-700 rounded-full btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                                </svg>
                                            </div>
                                            <div class="font-medium text-left text-base mt-2 ml-3">Wajib Melengkapi
                                                Profile
                                                Terlebih
                                                Dahulu
                                            </div>
                                        </div>


                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                    <div class="intro-y w-full box">
                                        <div class="mt-5 p-5">
                                            Kamu <b> Wajib melengkapi </b> profile data diri sebelum menggunakan Sistem
                                            Informasi ini. Pastikan bahwa data yang diisi dan disimpan sudah <b>
                                                BENAR,
                                            </b>
                                            ini
                                            akan
                                            mempengaruhi proses sistem untuk mengirim file dan pesan kepada mahasiswa
                                            terkait.
                                        </div>
                                    </div>
                                    <div class="mt-2 flex py-5 box">
                                        <h3 class="ml-5 mt-1">
                                            Bagi kamu yang belum mengisi :
                                        </h3>
                                        <a href="{{ route('profile') }}" class="ml-3">
                                            <div class="bg-gray-50 ">
                                                <button type="submit"
                                                    class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Edit
                                                    Profile
                                                </button>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="accordion-item mt-3">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2"
                                        aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        <div class="class flex">

                                            <div class="w-10 h-10 bg-blue-700 rounded-full btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                                </svg>
                                            </div>
                                            <div class="font-medium text-base mt-2 ml-3">Uplaod dan Edit File
                                            </div>
                                        </div>


                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                    <div class="intro-y w-full box">
                                        <div class="mt-5 p-5">
                                            Kamu <b> Wajib mengisi </b> form yang disediakan seperti Surat Bebas Perpus,
                                            Surat
                                            Layak Uplaod, scan/foto ktm, dan foto pribadi kamu. <br> Jika kamu
                                            memerlukan

                                            tanda tangan sebagai <b>Bukti Sebar Karya Akhir</b> bisa dimasukan di form
                                            yang
                                            telah
                                            disediakan (Ini tidak
                                            Wajib).
                                            <h3 class="mt-2">
                                                Setelah kamu mengupload file , kamu dapat Mengedit file yang telah kamu
                                                upload.
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="mt-2 flex py-5 box">
                                        <h3 class="ml-5 mt-1">
                                            LINK UPLOAD dan EDIT :
                                        </h3>
                                        <a href="{{ route('transcation/user_transaction') }}" class="ml-3">
                                            <div class="bg-gray-50 ">
                                                <button type="submit"
                                                    class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 mr-2">Kirim
                                                    File
                                                </button>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="accordion-item mt-3">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2"
                                        aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        <div class="class flex">

                                            <div class="w-10 h-10 bg-blue-700 rounded-full btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                                </svg>
                                            </div>
                                            <div class="font-medium text-base mt-2 ml-3">Status
                                            </div>
                                        </div>


                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                    <div class="intro-y w-full box">
                                        <div class="mt-5 p-5">
                                            <h3>
                                                Ada beberapa <b> Status</b> dalam sistem ini.
                                            </h3>
                                            <h3 class="py-2">
                                                <span
                                                    class="bg-yellow-700 text-white py-1 px-3 rounded-full text-xs">Diproses</span>
                                                Status ini menandakan kamu telah berhasil mengupload. Kamu hanya perlu
                                                menunggu admin memeriksa file kamu.
                                            </h3>


                                            <h3 class="py-2">
                                                <span
                                                    class="bg-red-700 text-white py-1 px-3 rounded-full text-xs">Revisi</span>
                                                Status ini menandakan kamu harus merevisi yang kamu upload sebelumnya.
                                                Kesalahan upload akan diberitahukan oleh admin dan dikirim melaui Email
                                                dan
                                                Whatsapp.
                                            </h3>

                                            <h3 class="py-2">
                                                <span
                                                    class="bg-gray-600 text-white py-1 px-3 rounded-full text-xs">Telah
                                                    Diperbaiki</span> Status ini muncul ketika kamu selesai revisi file
                                                atau
                                                pekerjaan kamu. Kamu hanya perlu menunggu.
                                            </h3>
                                            <h3 class="py-2">
                                                <span
                                                    class="bg-green-400 text-white py-1 px-3 rounded-full text-xs">Validasi
                                                    akun</span> Status ini kamu akan mendapatkan <b> Akun Digilib unila
                                                </b>
                                                untuk mengupload karya akhir kamu. Silahkan upload digilib.
                                            </h3>
                                            <h3 class="py-2"><span
                                                    class="bg-blue-700 text-white py-1 px-3 rounded-full text-xs">Telah
                                                    Upload Digilib</span> Status ini muncul ketika berhasil mengupload
                                                link
                                                digilib ke sistem ini. Kamu hanya perlu menunggu balasan dari admin.
                                                <h3 class="py-2"><span
                                                        class="bg-green-800 text-white py-1 px-3 rounded-full text-xs">Sudah
                                                        Tervalidasi</span> Status ini muncul ketika admin telah
                                                    memvalidasi
                                                    data
                                                    mahasiswa. Mahasiswa akan dikirimkan <b> File Layak Sebar</b>
                                                    melalui
                                                    Email.
                                                    Periksa
                                                    secara berkala Email kamu.</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item mt-3">
                                <div id="faq-accordion-content-2" class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-accordion-collapse-2"
                                        aria-expanded="false" aria-controls="faq-accordion-collapse-2">
                                        <div class="class flex">

                                            <div class="w-10 h-10 bg-blue-700 rounded-full btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
                                                </svg>
                                            </div>
                                            <div class="font-medium text-base mt-2 ml-3">Upload Digilib
                                            </div>
                                        </div>


                                    </button>
                                </div>
                                <div id="faq-accordion-collapse-2" class="accordion-collapse collapse"
                                    aria-labelledby="faq-accordion-content-2" data-bs-parent="#faq-accordion-1">
                                    <div class="intro-y w-full box">
                                        <div class="mt-5 p-5">
                                            Setelah mendapatkan Akun Digilib. Selanjutnya adalah Menguplaod file skripsi
                                            ke
                                            digilib Unila.
                                            <a class="text-blue-500"
                                                href="http://digilib.unila.ac.id/">http://digilib.unila.ac.id/</a>
                                        </div>
                                    </div>
                                    <div class="mt-2 py-5 box">
                                        <h3 class="px-5">
                                            Setelah selesai mengupload di web http://digilib.unila.ac.id/. Selanjutnya
                                            upload link digilib kamu kedalam halaman dibawah. <br>
                                            Kamu juga dapat mengedit link dihalaman tersebut. Jika ada kesalahan dalam
                                            proses
                                            mengupload akan dihubungi oleh admin.
                                        </h3>
                                        <a href="{{ route('get_repository') }}" class="p-5">

                                            <button type="submit"
                                                class="inline-flex justify-center py-1 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-800 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 sm:mr-5 focus:ring-blue-500">Upload
                                                link Digilib
                                            </button>

                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
</x-app-layout>
