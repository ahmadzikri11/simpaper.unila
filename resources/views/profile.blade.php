<x-app-layout>
    @section('navi')
        <div>SubScripts</div> <i data-feather="chevron-right" class="breadcrumb__icon"></i>
        <div class="breadcrumb--active">Profile</div>
    @endsection
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-7">
        @if (session()->has('success'))
            <div class="alert bg-green-700 text-white show flex items-center mb-2" role="alert">
                <i data-feather="edit" class="w-6 h-6 mr-2 "></i>
                {{ session()->get('success') }}
            </div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-1">
        @endif
        <div>
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-600">Lengkapi Profile Terlebih Dahulu.</p>
                    </div>
                </div>

                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="{{ route('profile.update', ['id' => $user->id]) }}" method="POST">
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
                                                    value="{{ old('email') ?? $user->email }}" name="email" id="email"
                                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="phone" class="block text-sm font-medium text-gray-700">Nomer
                                                Whattsapp (format: 62853--------)</label>
                                            <input class="form-control" type="text" placeholder="6285769088559"
                                                value="{{ old('phone') ?? $user->phone }}" name="phone" id="phone"
                                                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="fakultas"
                                                class="block text-sm font-medium text-gray-700">Fakultas</label>
                                            <select id="fakultas" name="fakultas" autocomplete="periode-name"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">
                                                    @if (empty($user->fakultas_id))
                                                        Pilih Fakultas
                                                    @else
                                                        {{ $user->getfakultas->fakultas }}
                                                    @endif
                                                </option>
                                                @foreach ($fakultas as $fakultas)
                                                    <option value="{{ $fakultas->id }}">
                                                        {{ $fakultas->fakultas }}
                                                    </option>
                                                @endforeach

                                            </select>
                                            @error('fakultas')
                                                <span class="text-red-500">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-6">
                                    <div class="col-span-3 sm:col-span-2">
                                        <div class="col-span-6 sm:col-span-3">
                                            <label for="" class="block text-sm font-medium text-gray-700">Prodi</label>
                                            <select id="prodi" name="prodi" autocomplete="periode-name"
                                                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                <option value="">
                                                    @if (empty($user->prodi_id))
                                                        Pilih Prodi
                                                    @else
                                                        {{ $user->getprodi->prodi }}
                                                    @endif
                                                </option>
                                            </select>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $('#fakultas').change(function() {
        var kabID = $(this).val();
        if (kabID) {
            $.ajax({
                type: "GET",
                url: "/getprodi?kabID=" + kabID,
                dataType: 'JSON',
                success: function(res) {
                    if (res) {
                        $("#prodi").empty();
                        $("#desa").empty();
                        $("#prodi").append('<option>---Pilih prodi---</option>');
                        $("#desa").append('<option>---Pilih Desa---</option>');
                        $.each(res, function(prodi, id) {
                            $("#prodi").append('<option value="' + id + '">' + prodi +
                                '</option>');
                        });
                    } else {
                        $("#prodi").empty();
                    }
                }
            });
        }
    });
</script>
