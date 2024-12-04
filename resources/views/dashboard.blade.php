<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <!-- Título del dashboard -->
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Las mejores rifas estan aqui') }}
            </h2>

            <!-- Agregar los enlaces "Ser organizador" y "Sobre nosotros" alineados de izquierda a derecha -->
            <div class="space-x-4">
                <a href="" class="text-blue-500 hover:text-blue-700">
                    Ser organizador
                </a>
                <a href="{{ route('about') }}" class="text-blue-500 hover:text-blue-700">
                    Sobre nosotros
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
