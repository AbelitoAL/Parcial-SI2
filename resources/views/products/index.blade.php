<x-app-layout>
        
    <x-slot name="header">
        <div class="mt-5">
            <livewire:product-finder />
        </div>
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Esto te puede interesar!') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @if (session()->has('message'))
                    <div class="p-3 text-green-500 dark:text-green-500 bg-green-950 border border-green-800 rounded-lg">
                        {{ session('message') }}
                    </div>
                @endif
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    {{ __("Lista de productos") }}
                </div>
            </div>

            <livewire:show-products />

        </div>
    </div>
</x-app-layout>
