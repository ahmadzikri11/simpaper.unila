<x-app-layout>
    <x-jet-section-border />
    @section('navi')
    <div>UPT Perpustakaan</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <div class="breadcrumb--active">Upload file SKBP</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div>
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg font-medium leading-6 text-gray-900">Upload Bukti</h3>
                            <p class="mt-1 text-sm text-gray-600">Upload Bukti Pembayaran Administrasi </p>
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


                        <form action="{{ route('create.bukti', ['id' => $user->getskbp[0]->id]) }}"
                            enctype="multipart/form-data" method="POST">
                            {{-- @method('PUT') --}}
                            @csrf

                            <div class="ml-10">
                                <div class="flex justify-left">
                                    <div class="mb-3 w-80">
                                        <label for="formFileSm"
                                            class="form-label inline-block mb-2 text-gray-700">Upload
                                            Bukti Pembayaran Administrasi<span class="text-red-500">
                                                JPG,Jfif,PNG(max:2Mb)</span></label>
                                        <input
                                            class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                            id="bukti" name="bukti" type="file">
                                        @error('bukti')
                                        <span class="text-red-500">{{ $message }}</span>
                                        @enderror
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


</x-app-layout>
