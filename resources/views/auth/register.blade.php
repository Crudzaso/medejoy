<x-guest-layout>
  

        <!-- Contenedor principal con flex para dividir la pantalla -->
        <div class="flex h-screen w-full">
            <!-- Columna de "Acerca de Nosotros" que ocupa la mitad de la pantalla -->
           <div class="w-1/2 bg-cover bg-center flex flex-col items-center justify-center p-8" style="background-image: url('{{ asset('images/register-image.jpg') }}')">
    <div class="bg-black bg-opacity-60 p-10 rounded-xl text-center max-w-md w-full">
        
        <div class="text-white space-y-4">
            <h2 class="text-3xl font-extrabold mb-4 tracking-tight">¡Tu oportunidad de ganar comienza aquí!</h2>
            <p class="text-lg leading-relaxed mb-6">
                Descubre premios increíbles, crea tus propias rifas y transforma tu suerte en éxito. ¡Únete ahora y sé parte de una comunidad donde todos pueden ganar!.
            </p>
            <div class="border-t border-white/20 pt-6">
                <h3 class="text-2xl font-bold text-yellow-300 italic tracking-wider">
                    Suéñalo, Rifálo, Gánalo
                </h3>
            </div>
        </div>
    </div>
</div>

            <!-- Columna del formulario de registro que ocupa la otra mitad -->
      <div class="w-[65%] flex flex-col items-center justify-center p-12 bg-gray-50">
    <div class="w-full max-w-xl">
        <x-validation-errors class="mb-6" />
        <x-authentication-card>
            <x-slot name="logo">
                <x-authentication-card-logo class="mb-6" />
            </x-slot>

             <div class="text-center mb-10">
    <h2 class="text-3xl font-bold text-gray-800 mb-4">Crea una cuenta</h2>
    <p class="text-xl text-gray-600 font-medium leading-relaxed max-w-md mx-auto">
        Regístrate y comienza a crear oportunidades de ganar
    </p>
</div>
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div>
                    <x-label for="name" value="{{ __('Nombre') }}" />
                    <x-input id="name" class="block mt-2 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div>
                    <x-label for="email" value="{{ __('Correo electronico') }}" />
                    <x-input id="email" class="block mt-2 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>

                <div>
                    <x-label for="password" value="{{ __('Contraseña') }}" />
                    <x-input id="password" class="block mt-2 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div>
                    <x-label for="password_confirmation" value="{{ __('Confirmar contraseña') }}" />
                    <x-input id="password_confirmation" class="block mt-2 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                    <div>
                        <x-label for="terms">
                            <div class="flex items-center">
                                <x-checkbox name="terms" id="terms" required />

                                <div class="ms-2">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                                </div>
                            </div>
                        </x-label>
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                        {{ __('¿Ya esta registrado?') }}
                    </a>

                    <x-button>
                        {{ __('Registrarse') }}
                    </x-button>
                </div>
            </form>
        </x-authentication-card>
    </div>
</div>
    
</x-guest-layout>
