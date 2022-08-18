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
    <link href="{{ asset('css/apps.css') }}" rel="stylesheet" />

</head>
<!-- END: Head -->

<body class="login">
    <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
            <!-- BEGIN: Login Info -->
            <div class="hidden xl:flex flex-col min-h-screen">
                <a href="" class="-intro-x flex items-center pt-5">
                    {{-- <img alt="Icewall Tailwind HTML Admin Template" class="w-6" src="dist/images/logo.svg"> --}}
                    {{-- <span class="text-white text-lg ml-3"> SIM<span class="font-medium">PAPER</span> </span> --}}
                </a>
                <div class="my-auto">
                    {{-- <img alt="Icewall Tailwind HTML Admin Template" class="-intro-x w-1/2 -mt-16"
                        src="dist/images/illustration.svg"> --}}
                    <img class="-intro-x w-1/2 -mt-16" src="{{ asset('Perpus.png') }}">
                    <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                        SIMPAPER

                    </div>
                    <div class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-gray-200">
                        Sistem Informasi Pelayanan Administrasi Perpustakaan</div>
                </div>
            </div>
            <!-- END: Login Info -->
            <!-- BEGIN: Login Form -->

            <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">

                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                        Sign In
                    </h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="intro-x mt-5 text-gray-900 xl:hidden text-center">SIMPAPER</div>
                        <div class="intro-x mt-2 text-gray-700 xl:hidden text-center">Sistem Informasi Pelayanan
                            Administrasi Perpustakaan</div>
                        <div class="intro-x mt-8">
                            <input type="text" id="login" name="login" :value="old('npm')" required
                                autofocus class="intro-x login__input form-control py-3 px-4 border-gray-300 block"
                                placeholder="Email atau NPM">
                            <input type="password" id="password" type="password" name="password" required
                                autocomplete="current-password"
                                class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4"
                                placeholder="Password">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4">
                            <div class="flex items-center mr-auto">
                                {{-- <input id="remember-me" type="checkbox" class="form-check-input border mr-2"> --}}
                                {{-- <label class="cursor-pointer select-none" for="remember-me">Remember me</label> --}}
                            </div>
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                            @endif
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                            <button type="submit"
                                class="bg-blue-900 text-white rounded-md py-3 px-4 w-full xl:w-32 xl:mr-3 align-top">Login</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- END: Login Form -->
        </div>
    </div>
    <!-- BEGIN: Dark Mode Switcher-->

    <!-- END: Dark Mode Switcher-->
    <!-- BEGIN: JS Assets-->
    <script src="dist/js/app.js"></script>
    <!-- END: JS Assets-->
</body>

</html>
