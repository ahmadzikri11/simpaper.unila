<x-app-layout>
    <x-jet-section-border />
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Submit Skripsi</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Kirim File</h3>
                        <p class="mt-1 text-sm text-gray-600">Upload File</p>
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
                    <form action="{{ route('transcation/user_transaction') }}" enctype="multipart/form-data"
                        method="POST">
                        @csrf
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
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <div class=" ml-10 grid grid-cols-4 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="token"
                                                class="block text-sm font-medium text-gray-700">Token</label>
                                            <input class="form-control" type="text" name="token" id="token"
                                                autocomplete="given-name" value="{{ old('token') }}"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            @error('token')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                {{-- <div class="grid ml-10 grid-cols-4 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="periode_wisuda"
                                                class="block text-sm font-medium text-gray-700">Periode
                                                Wisuda</label>
                                            <select id="periode_wisuda" name="periode_wisuda"
                                                autocomplete="periode-name"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Periode</option>
                                                <option value="januari">Januari</option>
                                                <option value="maret">Maret</option>
                                                <option value="mei">Mei</option>
                                                <option value="juli">Juli</option>
                                                <option value="september">September</option>
                                                <option value="november">November</option>
                                            </select>
                                            @error('periode_wisuda')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid ml-10 grid-cols-4 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="tahun_wisuda"
                                                class="block text-sm font-medium text-gray-700">Tahun Wisuda</label>
                                            <select id="tahun_wisuda" name="tahun_wisuda" autocomplete="periode-name"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">Pilih Tahun</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                            @error('tahun_wisuda')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 w-80 ">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">*Surat Layak
                                                Upload</label>
                                            <input
                                                class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="file1" name="file1" type="file">
                                            @error('file1')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 w-80">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">*Surat Bebas
                                                perpus</label>
                                            <input
                                                class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="file2" name="file2" type="file">
                                            @error('file2')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 w-80">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">Bila ada Bekas yang
                                                harus di Tanda Tangan sebagai Bukti Sebar Karya Akhir Silahkan
                                                isi</label>
                                            <input
                                                class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="file3" name="file3" type="file">
                                            @error('file3')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 w-80">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">Bukti Pembayaran
                                                Kerya Ilmiah <br>
                                                * Hanya Untuk Fakultas FMIPA, FP, FEB da FK</label>
                                            <input
                                                class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="file4" name="file4" type="file">
                                            @error('file4')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="ml-10">
                                    <div class="flex justify-left">
                                        <div class="mb-3 w-80">
                                            <label for="formFileSm"
                                                class="form-label inline-block mb-2 text-gray-700">*Input
                                                KTM</label>
                                            <input
                                                class="form-control block w-full px-2  py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding  border border-solid border-gray-300    rounded    transition  ease-in-out  m-0  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="ktm" name="ktm" type="file">
                                            @error('ktm')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>


                                <div class="intro-y box">
                                    <div
                                        class="flex flex-col sm:flex-row items-center p-5 border-b bg-white shadow-md ">
                                        <label for="formFileSm" class="form-label inline-block mb-2 text-gray-700"><img
                                                src="{{ asset('images/id.png') }}" class="  w-60"
                                                alt="description of myimage"></label>
                                        <div id="single-file-upload" class="p-5 ">
                                            <div class="fallback">
                                                <input name="photo" type="file" />
                                            </div>
                                            <div class="dz-message" data-dz-message>
                                                <div class="text-lg font-medium">*Upload Foto selfi kamu dan KTM kamu.
                                                </div>
                                                <div class="text-gray-600">click and upload file
                                                </div>
                                            </div>
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
    <x-jet-section-border />
</x-app-layout>
