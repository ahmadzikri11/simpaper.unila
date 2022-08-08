<!DOCTYPE html>
<!--
Template Name: Icewall - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">



    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com/"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">

                    {{-- logo --}}
                </a>
                <div class="my-auto">
                    <img class="-intro-x w-1/2 -mt-16" src="{{ asset('Perpus.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        UPT Perpustakaan
                        <br>
                        Universitas Lampung
                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 ">Manajemen File
                        Skripsi UPT-Perpustakaan Universitas Lampung</div>
                    <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                        <a href="{{ route('login') }}">
                            <button
                                class="btn btn-primary bg-[#1b27b3] text-white py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->



            <div class="h-screen item-center flex py-5 xl:py-0 my-10 xl:my-0">
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white  xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full      ">

                    <div class="xl:hidden align-content-center item-center">
                        <img class=" w-full " src="{{ asset('Perpus.png') }}">
                    </div>


                    <div class="intro-x mt-2 text-gray-500 xl:hidden text-center">UPT Perpustakaan Universitas
                        Lampung
                    </div>

                    {{-- <img class="xl:hidden " src="{{ asset('library.png') }}"> --}}
                    <div class="intro-x mt-5 text-center xl:hidden">
                        <a href="{{ route('login') }}">
                            <button
                                class="btn btn-primary bg-[#1b27b3] text-white py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        </a>
                    </div>

                </div>
            </div>
            <!-- END: Login Form -->
        </div>

    </div>

</body>

</html>
