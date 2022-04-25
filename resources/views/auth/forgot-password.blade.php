<x-guest-layout>

    <div class="h-screen flex py-5 my-auto xl:my-auto">
        <div
            class="my-auto mx-auto bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-96  lg:w-2/4 xl:w">


            <div class="mb-4 text-sm text-gray-600">
                {{ __('Apakah Kamu Lupa Password? Jika Iya, Maka biarkan kami memandu kamu untuk mereset password kamu. Masukan Email yang terdaftar didalam sistem. ') }}
            </div>

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="block">
                    <x-jet-label for="email" value="{{ __('Email') }}" />
                    <x-jet-input id="email" class="block form-control mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-jet-button>
                        {{ __('Email Password Reset Link') }}
                    </x-jet-button>
                </div>
            </form>
            {{-- </x-jet-authentication-card> --}}

        </div>
    </div>
</x-guest-layout>
