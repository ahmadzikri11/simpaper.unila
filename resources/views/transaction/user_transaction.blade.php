<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <x-app-layout>
        <x-jet-section-border />
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                            <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                        </div>
                    </div>


                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <form action="{{route('transcation/user_transaction')}}" method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="first-name" class="block text-sm font-medium text-gray-700">NAMA</label>
                                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="npm" class="block text-sm font-medium text-gray-700">NPM</label>
                                                    <input type="number" name="npm" id="npm" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
                                                    <input type="text" name="email-address" id="email-address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone" class="block text-sm font-medium text-gray-700">Nomer Whattsapp</label>
                                                <input type="text" name="phone" id="phone" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="token" class="block text-sm font-medium text-gray-700">Token</label>
                                                <input type="text" name="token" id="token" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="periode" class="block text-sm font-medium text-gray-700">Periode Wisuda</label>
                                                <select id="periode" name="periode" autocomplete="periode-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option>Januari</option>
                                                    <option>Maret</option>
                                                    <option>Mei</option>
                                                    <option>Juli</option>
                                                    <option>September</option>
                                                    <option>November</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input File Skripsi</label>
                                                <input class="form-control
                                                    block
                                                    w-full
                                                    px-2
                                                    py-1
                                                    text-sm
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="file1" name="file1" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input File 2</label>
                                                <input class="form-control
                                                    block
                                                    w-full
                                                    px-2
                                                    py-1
                                                    text-sm
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="file2" name="file2" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Input file3</label>
                                                <input class="form-control
                                                    block
                                                    w-full
                                                    px-2
                                                    py-1
                                                    text-sm
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="file3" name="file3" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>




        </div>
        <x-jet-section-border />
    </x-app-layout>
</body>

</html>