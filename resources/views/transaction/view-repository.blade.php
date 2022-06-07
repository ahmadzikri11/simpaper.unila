<x-app-layout>
    {{-- <x-jet-section-border /> --}}
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Repository</div>
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
                        <div class="alert bg-blue-900 show mb-2" role="alert">
                            <div class="flex items-center">
                                <div class="font-medium text-white text-lg">Data Kamu Belum di Upload</div>
                                <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">Info</div>
                            </div>
                            <div class="mt-3 text-white">Silahkan Kirim File terlebih dahulu.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- <x-jet-section-border /> --}}
</x-app-layout>
