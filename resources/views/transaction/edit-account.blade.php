<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-7">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-1">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('update.account', ['id' => $user->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="grid grid-cols-2 gap-2">
                                <div class="grid grid-cols-2 gap-2">
                                    <div class="col-span-3">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="name"
                                                class="block text-sm font-medium text-gray-700">Nama</label>
                                            <input type="text" value="{{ old('name') ?? $user->name }}" name="name"
                                                id="name"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3 ml-5">
                                        <div>
                                            <div class="col-span-6">
                                                <label for="npm"
                                                    class="block text-sm font-medium text-gray-700">NPM</label>
                                                <input type="number" value="{{ old('npm') ?? $user->npm }}" name="npm"
                                                    id="npm"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3">
                                        <div>
                                            <div class="col-span-6 mt-5 sm:col-span-3">
                                                <label for="email"
                                                    class="block text-sm font-medium text-gray-700">Alamat
                                                    Email</label>
                                                <input type="email" value="{{ old('email') ?? $user->email }}"
                                                    name="email" id="email"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid grid-cols-3 gap-2">
                                    <div class="col-span-3  mt-5  ml-5  sm:col-span-2">
                                        <div class="">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomer
                                                Whattsapp</label>
                                            <input type="text" value="{{ old('phone') ?? $user->phone }}" name="phone"
                                                id="phone"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                                <!--    <div class="grid grid-cols-3 gap-2">
                                                                                                                                                                <div class="col-span-3 sm:col-span-2">
                                                                                                                                                                    <div class="col-span-6 sm:col-span-3">
                                                                                                                                                                        <label for="token" class="block text-sm font-medium text-gray-700">Token</label>
                                                                                                                                                                        <input type="text" name="token" value="" id="token" autocomplete="given-token" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                                                                                                                                    </div>
                                                                                                                                                                </div>
                                                                                                                                                            </div>
                                                                                                                                                            -->
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-7">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>
</x-app-layout>
