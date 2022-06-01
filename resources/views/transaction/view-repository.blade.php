<x-app-layout>
    {{-- <x-jet-section-border /> --}}
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Submit Skripsi</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class>
            <div class="sm:mt-5 md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Kirim Link repository</h3>
                        <p class="mt-1 text-sm text-gray-600">Kirim link akun Digilib Unila kamu disini.</p>
                        <p class="mt-1 text-sm text-gray-600">Contoh : http://digilib.unila.ac.id/61033/</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="w-ful">
                        @if (session()->has('message'))
                            <div class="alert bg-green-500 text-white show flex items-center mb-2" role="alert">
                                <i data-feather="file-plus" class="w-6 h-6 mr-2 "></i>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    </div>
                    <form action="{{ route('create_repository') }}" method="POST">
                        @csrf
                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div class="flex ml-5 max-w-7xl table-fixed">
                                    <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                        <div class="inline-block min-w-full align-middle">
                                            <div class="overflow-hidden ">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 sm:mx-5 w-full ">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">Upload Link
                                                Digilib</label>
                                            <input class="form-control" type="text" name="link_repository"
                                                id="link_repository" placeholder="http://digilib.unila.ac.id/61033/"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('file1')
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
    {{-- <x-jet-section-border /> --}}
</x-app-layout>
