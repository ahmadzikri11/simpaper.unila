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
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Kirim File</h3>
                            <p class="mt-1 text-sm text-gray-600">Kirim File Perjuanganmu disini</p>
                        </div>
                    </div>



                    <div class="mt-5 md:mt-0 md:col-span-2">
                        <div class="w-ful">
                            @if (session()->has('message'))
                                <p class="text-green-500 font-medium text-base">{{ session()->get('message') }}</p>
                            @endif
                        </div>
                        <form action="{{ route('transcation/user_transaction') }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="flex max-w-7xl table-fixed">
                                        <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                            <div class="inline-block min-w-full align-middle">
                                                <div class="overflow-hidden ">
                                                    <table
                                                        class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                                            <tr>
                                                                <th scope="col"
                                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                                </th>

                                                                <th scope="col"
                                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                                </th>

                                                                <th scope="col"
                                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                                                    Data Mahasiswa
                                                                </th>

                                                                <th scope="col"
                                                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">

                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody
                                                            class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Nama</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    :</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                                    {{ $user->name }}</td>
                                                            </tr>

                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    NPM</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    :</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                                    {{ $user->npm }}</td>
                                                            </tr>
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Email</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    :</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                                    {{ $user->email }}</td>
                                                            </tr>
                                                            <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    Phone</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                                    :</td>
                                                                <td
                                                                    class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">
                                                                    {{ $user->phone }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="token"
                                                    class="block text-sm font-medium text-gray-700">Token</label>
                                                <input type="text" name="token" id="token" autocomplete="given-name"
                                                    value="{{ old('token') }}"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                @error('token')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="periode_wisuda"
                                                    class="block text-sm font-medium text-gray-700">Periode
                                                    Wisuda</label>
                                                <select id="periode_wisuda" name="periode_wisuda"
                                                    autocomplete="periode-name"
                                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                    <option value="">Pilih Periode</option>
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
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm"
                                                    class="form-label inline-block mb-2 text-gray-700">Input File
                                                    Skripsi</label>
                                                <input
                                                    class="form-control
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
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="file1" name="file1" type="file">
                                                @error('file1')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm"
                                                    class="form-label inline-block mb-2 text-gray-700">Input File
                                                    2</label>
                                                <input
                                                    class="form-control
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
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="file2" name="file2" type="file">
                                                @error('file2')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex justify-left">
                                            <div class="mb-3 w-96">
                                                <label for="formFileSm"
                                                    class="form-label inline-block mb-2 text-gray-700">Input
                                                    file3</label>
                                                <input
                                                    class="form-control
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
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                    id="file3" name="file3" type="file">
                                                @error('file3')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit"
                                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
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
