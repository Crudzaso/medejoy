<x-guest-layout>
    
        <!-- Sección derecha -->
        <div class="flex flex-col justify-center items-center px-8 h-screen">
            <div class="w-full max-w-md">
                <!-- Logo con mensaje de bienvenida -->
                <div class="text-center mb-6">
                   
                    <p class="text-lg font-semibold text-gray-700 mt-2">Te damos la bienvenida</p>
                    <p class="text-sm text-gray-500">La suerte está de tu lado</p>
                </div>

                <!-- Botones de autenticación -->
                <div class="flex justify-center space-x-4 mb-6">
                    <!-- Botón de GitHub -->
                    <a href="{{ route('github.login') }}" 
                       class="flex items-center px-4 py-2 bg-gray-800 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-700">
                        <img src="{{ asset('images/github-login.png') }}" alt="GitHub" class="h-5 w-5 mr-2">
                        <span>Continuar con GitHub</span>
                    </a>
                    
                    <!-- Botón de Google -->
                    <a href="" 
                       class="flex items-center px-4 py-2 bg-red-600 text-white font-semibold text-sm rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <img src="{{ asset('images/google-login.png') }}" alt="Google" class="h-5 w-5 mr-2">
                        <span>Continuar con Google</span>
                    </a>
                </div>

                <!-- Línea divisoria -->
                <div class="flex items-center w-full my-6">
                    <div class="border-t border-gray-300 flex-grow"></div>
                    <span class="mx-4 text-gray-500">O</span>
                    <div class="border-t border-gray-300 flex-grow"></div>
                </div>

                <!-- Formulario de inicio de sesión -->
                <x-authentication-card>
                    <x-slot name="logo">
                        <x-authentication-card-logo />
                    </x-slot>
                    <x-validation-errors class="mb-4" />

                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                    @endsession

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-4">
                            <x-label for="email" value="{{ __('Correo Electrónico') }}" class="block text-gray-700 font-bold mb-2" />
                            <x-input id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        </div>

                        <div class="mb-6">
                            <x-label for="password" value="{{ __('Contraseña') }}" class="block text-gray-700 font-bold mb-2" />
                            <x-input id="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" required autocomplete="current-password" />
                        </div>

                        <div class="flex items-center justify-between mb-4">
                            <div class="form-check">
                                <input class="form-check-input h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="remember_me" name="remember">
                                <label class="form-check-label inline-block text-gray-700" for="remember_me">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('password.request') }}">
                                    {{ __('¿Olvidó su contraseña?') }}
                                </a>
                            @endif
                        </div>

                        <div class="flex items-center justify-center">
                            <x-button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                {{ __('Iniciar Sesión') }}
                            </x-button>
                        </div>
                    </form>
                </x-authentication-card>
            </div>
        </div>
    </div>
</x-guest-layout>
