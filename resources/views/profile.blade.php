<x-app-layout>
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Profile</div>
    @endsection
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
                        <form ac    tion="{{ route('profile.update', ['id' => $user->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="name" class="form-label">Nama</label>
                                                <input class="form-control" type="text"
                                                    value="{{ old('name') ?? $user->name }}" name="name" id="name"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="npm"
                                                        class="block text-sm font-medium text-gray-700">NPM</label>
                                                    <input class="form-control" type="number"
                                                        value="{{ old('npm') ?? $user->npm }}" name="npm" id="npm"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div>
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="email"
                                                        class="block text-sm font-medium text-gray-700">Alamat
                                                        Email</label>
                                                    <input class="form-control" type="email"
                                                        value="{{ old('email') ?? $user->email }}" name="email"
                                                        id="email"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="phone" class="block text-sm font-medium text-gray-700">Nomer
                                                    Whattsapp</label>
                                                <input class="form-control" type="text"
                                                    value="{{ old('phone') ?? $user->phone }}" name="phone" id="phone"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 py-3 text-right sm:px-1">
                                        <button type="submit"
                                            class="inline-flex justify-center bg-indigo-600 py-2 px-4 border shadow-sm text-sm font-medium rounded-md text-white">Save</button>
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>

                </div>
                <div class="mt-5">
                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                        @livewire('profile.update-password-form')
                </div>
            </div>


        </div>

        <x-jet-section-border />
        @endif
    </div>
</x-app-layout>
