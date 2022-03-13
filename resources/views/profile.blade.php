<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Lengkapi profile</title>
</head>

<body>
    <x-app-layout>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-7">
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-1">
                <div>
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                                <p class="mt-1 text-sm text-gray-600">Lengkapi Profile Terlebih Dahulu.</p>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{route('profile/update', $siswa->id) }}" method="POST">
                                @csrf
                                <div class="shadow sm:rounded-md sm:overflow-hidden">
                                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="first-name" class="block text-sm font-medium text-gray-700">NAMA</label>
                                                    <input type="text" value="{{ $user->name }}" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                                                        <input type="number" value="{{ $user->npm }}" name="npm" id="npm" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                        <input type="text " value="{{ $user->email}}" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="phone" class="block text-sm font-medium text-gray-700">Nomer Whattsapp</label>
                                                    <input type="text" value="{{ $user->phone }}" name="phone" id="phone" autocomplete="given-phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                        <!--    <div class="grid grid-cols-3 gap-6">
                                            <div class="col-span-3 sm:col-span-2">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="token" class="block text-sm font-medium text-gray-700">Token</label>
                                                    <input type="text" name="token" value="{{ $post->title }}" id="token" autocomplete="given-token" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                        -->
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-7">
                                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))

                    @livewire('profile.update-password-form')
                </div>




            </div>





            <x-jet-section-border />
            @endif
        </div>
    </x-app-layout>
</body>

</html>