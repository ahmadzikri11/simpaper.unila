<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'UPT Perpustakaan') }}</title>
    @livewireStyles
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> --}}

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link href="{{ asset('css/apps.css') }}" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.4/js/dataTables.tableTools.min.js">
    </script>
    <script type="text/javascript" src="https://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js"></script> --}}
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.1.2/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

</head>

<body class="main">
    <!-- BEGIN: Mobile Menu -->
    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center ">
            <!-- BEGIN: Logo -->
            <a href="" class="-intro-x hidden md:flex">
                <img alt="" class="w-24" src="{{ asset('Perpus.png') }}">
                <span class="text-white mt-2 text-lg ml-3"> Layanan-<span class="font-medium">UPT Perpustakaan</span>
                </span>
            </a>
            <!-- END: Logo -->
            <!-- BEGIN: Breadcrumb -->
            <div class="-intro-x breadcrumb mr-auto"> @yield('navi') </div>
            <!-- END: Breadcrumb -->
            <!-- BEGIN: Search -->

            <!-- END: Search -->
            <!-- BEGIN: Notifications -->

            <!-- END: Notifications -->
            <!-- BEGIN: Account Menu -->

            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->

            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Content -->
                <div class="content">
                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            QR Validasi
                        </h2>

                    </div>
                    <!-- BEGIN: Invoice -->
                    <div class="intro-y box overflow-hidden mt-5">
                        <div class="border-b border-gray-200 dark:border-dark-5 text-center sm:text-left">
                            <div class="px-5 py-10 sm:px-20 sm:py-20">
                                <div class="text-theme-17 dark:text-theme-17 font-semibold text-3xl">Tervalidasi</div>
                                <div class="mt-2"> Nomor Surat <span class="font-medium">{{ $transaction->id }}</span>
                                </div>
                                <div class="mt-1"> Divalidasi oleh : {{ $transaction->validator }}</div>
                            </div>
                            <div class="flex flex-col lg:flex-row px-5 sm:px-20 pt-10 pb-10 sm:pb-20">
                                <div>
                                    <div class="text-base text-gray-600">Pemilik Berkas</div>
                                    <div class="text-lg font-medium text-theme-17 dark:text-theme-17 mt-2">
                                        {{ $transaction->transactions->name }}</div>
                                    <div class="mt-1">{{ $transaction->transactions->npm }}</div>
                                    <div class="mt-1">{{ $transaction->transactions->getfakultas->fakultas }} /
                                        {{ $transaction->transactions->getprodi->prodi }}</div>
                                </div>
                                <div class="lg:text-right mt-10 lg:mt-0 lg:ml-auto">
                                    <div class="text-base text-gray-600">Ditandatangani Oleh</div>
                                    <div class="text-lg font-medium text-theme-17 dark:text-theme-17 mt-2">Endah
                                        Kurniasari, S.I.Kom
                                    </div>
                                    <div class="mt-1">Sub Divisi Layanan Teknologi Informasi
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- END: Invoice -->
                </div>
                <!-- END: Content -->
            </div>
            <!-- END: Content -->
        </div>
    </div>
</body>


</html>
