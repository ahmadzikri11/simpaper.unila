<x-app-layout>

    @section('navi')
        <div>UPT Perpustakaan</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Status</div>
    @endsection
    <div class="max-w-7xl mt-7 mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Status Validasi</h3>
                        <p class="mt-1 text-sm text-gray-600"> File Skripsi</p>
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

                    <div class="alert bg-blue-900 show mb-2" role="alert">
                        <div class="flex items-center">
                            <div class="font-medium text-white text-lg">Data Kamu Belum di Upload</div>
                            <div class="text-xs bg-gray-600 px-1 rounded-md text-white ml-auto">Info</div>
                        </div>
                        <div class="mt-3 text-white">Lengkapi Profile kamu terlebih dahulu ya. kemudian Upload File
                            Kamu dihalaman Submission
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->




</x-app-layout>
