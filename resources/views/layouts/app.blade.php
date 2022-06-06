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

</head>

<body class="main">
    <!-- BEGIN: Mobile Menu -->



    <x-mobile-menu />

    <!-- END: Mobile Menu -->
    <!-- BEGIN: Top Bar -->
    <div class="top-bar-boxed border-b border-theme-2 -mt-7 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
        <div class="h-full flex items-center p-10">
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
            <div class="text-white mr-2">{{ Auth::user()->name }}</div>
            <div class="intro-x dropdown w-8 h-8">
                <div class="dropdown-toggle mt-1 w-5 h-5 overflow-hidden shadow-lg image-fit zoom-in scale-110"
                    role="button" aria-expanded="false">
                    <i data-feather="user" class="w-5 h-5 mt-1 items-center justify-center text-white"></i>
                </div>
                <div class="dropdown-menu w-56">
                    <div class="dropdown-menu__content box bg-theme-11  text-white">
                        <div class="p-4 border-b border-theme-12">
                            <div class="font-medium">{{ Auth::user()->name }}</div>
                            <div class="text-xs text-theme-13 mt-0.5 ">{{ Auth::user()->npm }}
                            </div>
                        </div>
                        <div class="p-2">
                            <a href=""
                                class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1  rounded-md">
                                <i data-feather="user" class="w-4 h-4 mr-2"></i> Profile </a>

                        </div>
                        <div class="p-2 w-full">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button
                                    class="flex w-full items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1  rounded-md"
                                    type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i>
                                    {{ __('Log Out') }}
                                </button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Account Menu -->
        </div>
    </div>
    <!-- END: Top Bar -->
    <div class="wrapper">
        <div class="wrapper-box">
            <!-- BEGIN: Side Menu -->
            <x-side-menu />
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                {{ $slot }}
            </div>
            <!-- END: Content -->
        </div>
    </div>
</body>
@livewireScripts

</html>
