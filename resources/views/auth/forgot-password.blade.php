<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <img src="img/bar.png" width="70px" alt="login">
            {{--<x-jet-authentication-card-logo />--}}
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Esqueceu sua senha? Não há problema. Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha um novo.') }}
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
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Link de redefinição de senha de e-mail') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
