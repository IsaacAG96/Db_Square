<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Inicio') }}
            </h2>
        </x-slot>
        <div class="flex-grow">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <x-infopage />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>