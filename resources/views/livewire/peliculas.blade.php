<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4"> 

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-900 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">NOMBRE</th> 
                <th class="px-4 py-2">DIRECTOR</th>
                <th class="px-4 py-2">GENERO</th>
                <th class="px-4 py-2">ARTISTA 1</th>
                <th class="px-4 py-2">ARTISTA 2</th>    
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border px-4 py-2">{{$pelicula->id_peli}}</td>
                <td class="border px-4 py-2">{{$pelicula->nombre_peli}}</td>
                <td class="border px-4 py-2">{{$pelicula->director}}</td>
                <td class="border px-4 py-2">{{$pelicula->genero}}</td>
                <td class="border px-4 py-2">{{$pelicula->artista1}}</td>
                <td class="border px-4 py-2">{{$pelicula->artista2}}</td>
                <td class="border px-4 py-2 text-center">
                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                </td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>