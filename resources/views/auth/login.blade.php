<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Correo electrónico') }}" />
                <x-input id="email" class="block mt-1 w-full focus:ring-green-500 focus:border-green-500" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full focus:ring-green-500 focus:border-green-500" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" class="text-green-500" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <div class="flex flex-col mt-4 gap-4 mb-4">
                <div class="flex justify-center items-center">
                    <a href="{{ route('auth.google') }}" class="justify-center flex items-center bg-white border border-gray-300 rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-200 w-full max-w-xs">
                        <div class="flex items-center justify-center gap-2">
                            <img src="{{ asset('icons/google.png') }}" alt="Logo de Google" class="w-5 h-5">
                            <span class="text-center">{{ __('Iniciar sesión con Google') }}</span>
                        </div>
                    </a>
                </div>

                <div class="flex justify-center items-center">
                    <a href="{{ route('auth.discord') }}" class="justify-center flex items-center bg-white border border-gray-300 rounded-lg p-2 hover:bg-green-500 hover:text-white transition duration-200 w-full max-w-xs">
                        <div class="flex items-center justify-center gap-2">
                            <img src="{{ asset('icons/discord.png') }}" alt="Logo de Discord" class="w-5 h-5">
                            <span class="text-center">{{ __('Iniciar sesión con Discord') }}</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" href="{{ route('password.request') }}">
                        {{ __('¿Olvidaste tu contraseña?') }}
                    </a>
                @endif

                <x-button class="ms-4" style="background-color: #64d465; color: white; border: none; padding: 10px 20px; border-radius: 5px;">
                    {{ __('Iniciar sesión') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
