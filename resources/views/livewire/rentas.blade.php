<x-slot name="header">
    <h1 class="text-gray-900">CRUD con Laravel y Livewire</h1>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif

        <button  class="bg-green-500 hover:bg-green-600 text-gray-900 font-bold py-2 px-4 my-3">Nuevo</button>


        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">FECH_REGIS</th>
                <th class="px-4 py-2">FECH_DEVOL</th>
                <th class="px-4 py-2">FECH_ENTRE</th>
                <th class="px-4 py-2">CLIENTE</th>
                <th class="px-4 py-2">PELICULA</th>
                <th class="px-4 py-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rentas as $renta)
            <tr>
                <td class="border px-4 py-2">{{$renta->id_renta}}</td>
                <td class="border px-4 py-2">{{$renta->fech_registro}}</td>
                <td class="border px-4 py-2">{{$renta->fech_devol}}</td>
                <td class="border px-4 py-2">{{$renta->fech_entrega}}</td>
                <td class="border px-4 py-2">{{$renta->name}}</td>
                <td class="border px-4 py-2">{{$renta->nombre_peli}}</td>
                <td class="border px-4 py-2 text-center">
                    <button were:click="edit({{$renta->id_renta}})" class="bg-blue-500 hover:bg-blue-600 rounded-md text-white font-bold py-2 px-4">Editar</button>
                    <button were:click="delete({{$renta->id_renta}})" class="bg-red-500 hover:bg-blue-600 rounded-md text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
    </div>
</div>
