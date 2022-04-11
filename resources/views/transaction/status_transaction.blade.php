<x-app-layout>
    <div class="flex justify-center mt-10">
        <div class="rounded-lg shadow-lg bg-white max-w-sm">
            <div class="p-6">
                <h5 class="text-gray-900 text-xl font-medium mb-2">Status Upload</h5>

                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="flex max-w-7xl table-fixed">
                        <div class="inline-block min-w-full align-middle">
                            <div class="overflow-hidden ">
                                <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-700">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <tbody
                                        class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                                        <tr class=" dark:hover:bg-gray-700">
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

                                        <tr class=" dark:hover:bg-gray-700">
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
                                        <tr class=" dark:hover:bg-gray-700">
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
                                        <tr class=" dark:hover:bg-gray-700">
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

                                        <tr class=" dark:hover:bg-gray-700">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                Status Upload</td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                :</td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap dark:text-white">


                                                <span
                                                    class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs text-white font-bold">Diterima</span>
                                            </td>
                                        </tr>

                            </div>
                        </div>



                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-gray-700 text-base mb-4">
            Some quick example text to build on the card title and make up the bulk of the card's
            content.
        </p>
    </div>
    </div>



</x-app-layout>
