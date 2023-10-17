<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Gestión de categoria
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <h1 class="text-4xl font-bold mb-1 mt-3 text-start">
                        Lista de categorias
                    </h1>

                    <div class="p-5">   
                    @forelse ($bitacoras as $bitacora)<div class="flex justify-evenly bg-gray-400 p-3 rounded-t-lg text-black font-bold">
                        <p>USUARIO</p>
                        <p>ACCION</p>
                    </div>
                    <div class="flex justify-evenly bg-gray-400 p-3 text-black font-bold">
                        <p>{{$bitacora->usuario}}</p>
                        <p>{{$bitacora->accion}}</p>
                    </div>
                    @empty
                    <p>NO TIENE</p>
                    @endforelse
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>