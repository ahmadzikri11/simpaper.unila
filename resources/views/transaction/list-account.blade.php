@extends('side-bar')

@section('tittle', 'list Akun')

@section('content')


    <div class="flex flex-col px-12 mt-5">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">

            <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-md sm:rounded-lg">
                    <table class="min-w-full">
                        <thead class="bg-green-200 dark:bg-gray-700">
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    Nama
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    NPM
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    No Whatssapp
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    Email
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    Role
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-900 uppercase dark:text-gray-400">
                                    Action
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $data)
                                <tr
                                    class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 dark:border-gray-600">
                                    <td
                                        class="py-3 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $data->name }}
                                    </td>
                                    <td class="py-3 px-6 text-sm text-gray-900 whitespace-nowrap dark:text-gray-400">
                                        {{ $data->npm }}
                                    </td>
                                    <td class="py-3 px-6 text-sm text-gray-900 whitespace-nowrap dark:text-gray-400">

                                        {{ $data->phone }}
                                    </td>
                                    <td class="py-3 px-6 text-sm text-gray-900 whitespace-nowrap dark:text-gray-400">
                                        {{ $data->email }}
                                    </td>
                                    <td class="py-3 px-6 text-sm text-gray-900 whitespace-nowrap dark:text-gray-400">
                                        {{ $data->role }}
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <div class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>
                                            <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110">
                                                <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $user->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection
