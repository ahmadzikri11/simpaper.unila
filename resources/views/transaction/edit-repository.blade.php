<x-app-layout>
    {{-- <x-jet-section-border /> --}}
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Submit Skripsi</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="sm:mt-10 md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit Link repository</h3>
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

                    <div class="px-4 py-5 my-5 bg-white shadow-sm space-y-6 sm:p-6">

                        <div class="sm:ml-12">
                            Status <span class="ml-5">:</span>
                            @if ($user->getRepository->status == 'Sudah Tervalidasi')
                                <span class="bg-green-600 text-white ml-3 py-1 px-3 rounded-full text-xs"> Sudah
                                    Divalidasi</span>
                                <div class="mt-2 sm:ml-10">
                                    <span class="text-gray-800 sm:ml-3 py-2 sm:px-3 text-m"> *Data Kamu Sudah Kami Cek
                                        dan sudah Sesuai. Terimakasih
                                    </span>
                                </div>
                            @elseif ($user->getRepository->status == 'Revisi')
                                <span class="bg-red-700 text-white ml-3 py-1 px-3 rounded-full text-xs">
                                    REVISI</span>
                                <div class="mt-2 sm:ml-10">
                                    <span class="text-gray-800 sm:ml-3 py-2 sm:px-3 text-m"> *Data Kamu Sudah Kami Cek,
                                        Tapi
                                        Beberapa Hal Yang perlu Kamu Perbaiki</span>
                                </div>
                            @elseif ($user->getRepository->status == 'Diproses')
                                <span class="bg-yellow-500 text-white ml-3 py-1 px-3 rounded-full text-xs">Dalam
                                    Proses</span>
                                <div class="mt-2 sm:ml-10">
                                    <span class="text-gray-800 sm:ml-3 py-2 sm:px-3 text-m"> *Data Kamu Belum Kami
                                        cek. Kami akan Cek secepat mungkin.</span>
                                </div>
                            @elseif ($user->getRepository->status == 'Telah Diperbaiki')
                                <span class="bg-gray-500 text-white ml-3 py-1 px-3 rounded-full text-xs">Telah
                                    Diperbaiki</span>
                                <div class="mt-2 sm:ml-10">
                                    <span class="text-gray-800 sm:ml-3 py-2 sm:px-3 text-m"> *Data Kamu Belum Kami
                                        cek. Kami akan Cek secepat mungkin.</span>
                                </div>
                            @endif
                        </div>
                        <div class="sm:ml-12 flex">
                            Pesan <span class="ml-5 mr-2">:</span>
                            <div>
                                <span class="text-gray-800 py-2  text-m">
                                    {{ $user->getRepository->message }}</span>
                            </div>
                        </div>
                    </div>

                    <div class="px-4 py-5 bg-white shadow-sm space-y-6 sm:p-6">

                        <form action="{{ route('update_repository', ['id' => $user->getRepository->id]) }}"
                            method="POST">
                            @method('PUT')
                            @csrf
                            <div class="sm:ml-10 mt-10">
                                <div class="flex justify-left">
                                    <div class="mb-3 sm:mx-5 w-full ">
                                        <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Edit
                                            Link
                                            Digilib</label>
                                        <input class="form-control" type="text"
                                            value="{{ $user->getRepository->link_repository }}" name="link_repository"
                                            id="link_repository" placeholder="http://digilib.unila.ac.id/61033/"
                                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        @error('file1')
                                            <span class="text-red-500">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- <x-jet-section-border /> --}}
</x-app-layout>
