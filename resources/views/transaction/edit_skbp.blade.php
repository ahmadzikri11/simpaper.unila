<x-app-layout>
    <x-jet-section-border />
    @section('navi')
    <div>UPT Perpustakaan</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
    <div class="breadcrumb--active">Upload file SKBP</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Edit File</h3>
                        <p class="mt-1 text-sm text-gray-600">Edit SKBP </p>
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
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="flex ml-5 max-w-7xl table-fixed">
                                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                                    <div class="inline-block min-w-full align-middle">
                                        <div class="overflow-hidden ">
                                            <table class="min-w-full divide-y divide-gray-200 table-fixed ">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col"
                                                            class="py-3 px-6 text-xs font-medium tracking-wider text-left text-black uppercase ">
                                                            Data
                                                        </th>


                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200  ">
                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Nama</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($user->name))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->name }}</td>
                                                        @endif
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            NPM</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($user->npm))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->npm }}</td>
                                                        @endif
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Alamat</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($user->alamat))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->alamat }}</td>
                                                        @endif
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Fakultas</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>

                                                        @if (empty($user->fakultas_id))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->getfakultas->fakultas }}</td>
                                                        @endif

                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Prodi</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>

                                                        @if (empty($user->prodi_id))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->getprodi->prodi }}</td>
                                                        @endif

                                                    </tr>


                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Email</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($user->email))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->email }}</td>
                                                        @endif
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Phone</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($user->phone))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{ $user->phone }}</td>
                                                        @endif
                                                    </tr>

                                                    <tr class="hover:bg-gray-100 ">
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            Status</td>
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap ">
                                                            :</td>
                                                        @if (empty($status))
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-red-500 whitespace-nowrap ">
                                                            Perhatian!!! Harap lengkapi Profile Terlebih dahulu!
                                                        </td>
                                                        @else
                                                        <td
                                                            class="py-4 px-6 text-sm font-medium text-gray-500 whitespace-nowrap ">
                                                            {{$status}}</td>
                                                        @endif
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- {{ $user->getskbp[0]->id }} --}}

                            <form action="{{ route('update.skbp', ['id' => $user->getskbp[0]->id]) }}"
                                enctype="multipart/form-data" method="POST">
                                @method('PUT')
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


                                        @if($status =='virtual_akun')
                                        <i>Data Telah Terverifikasi. Silahkan Upload Bukti Pembayaran Administrasi Di
                                            Link <p style="color:blue"><a
                                                    href="{{ route('view_bukti')}}"><u><b>Berikut</b></a></u></i></p>

                                        @else

                                        <i>*Silahkan tunggu proses verifikasi dari admin, link akan tersedia jika admin
                                            telah mem-verifikasi.</i>

                                        @endif

                                        {{-- <span class="form-label inline-block mb-2 text-gray-700"><p class="italic ...">***Silahkan Tunggu proses Verifikasi Admin***</p></span> --}}

                                        <div class="ml-10">
                                            <div class="flex justify-left">
                                                <div class="mb-3 w-80 ">
                                                    <label for="formFileSm"
                                                        class="form-label inline-block mb-2 text-gray-700">Upload Slip
                                                        UKT Terakhir <span
                                                            class="text-red-500">PDF(max:2Mb)</span></label>
                                                    <input
                                                        class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                        id="ktm" name="ktm" type="file">
                                                    @error('ktm')
                                                    <span class="text-red-500">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-10">
                                            <div class="flex justify-left">
                                                <div class="mb-3 w-80">
                                                    <label for="formFileSm"
                                                        class="form-label inline-block mb-2 text-gray-700">Upload KTM
                                                        <span class="text-red-500">PDF(max:2Mb)</span></label>
                                                    <input
                                                        class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                        id="spp" name="spp" type="file">
                                                    @error('spp')
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



            {{-- <form action="{{ route('create.bukti', ['id' => $user->getskbp[0]->id]) }}"
            enctype="multipart/form-data"
            method="POST">
            @method('PUT')
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
                            <div class="mb-3 w-80 ">
                                <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700">Upload Slip
                                    UKT Terakhir</label>
                                <input
                                    class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="bukti" name="bukti" type="file">
                                @error('bukti')
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
        </div> --}}



    </div>
    </div>
    </div>

</x-app-layout>
