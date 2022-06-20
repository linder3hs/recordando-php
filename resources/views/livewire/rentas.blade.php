<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Renta') }}
        </h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

        @if(session()->has('message'))
            <div class="bg-teal-100 rounded-b text-teal-900 px-4 py-4 shadow-md my-3" role="alert">
                <div class="flex">
                    <div>
                        <h4>{{ session('message')}}</h4>
                    </div>
                </div>
            </div>
        @endif


        <button  class="bg-gray-800 hover:bg-gray-800 rounded-md text-white font-bold py-2 px-4 my-3" >Nuevo</button>
           

        <table class="table-fixed w-full">
        <thead>
            <tr class="bg-indigo-900 text-white">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">FECH. REGISTRO</th> 
                <th class="px-4 py-2">FECH. DEVOLUCION</th>
                <th class="px-4 py-2">FECH. ENTREGA</th>
                <th class="px-4 py-2">CLIENTE</th>
                <th class="px-4 py-2">PELICULA</th>   
            </tr>
        </thead>
        <tbody>
        @foreach($renta as $rentas)
            <tr>
                <td class="border px-4 py-2">{{$rentas->id_renta}}</td>
                <td class="border px-4 py-2">{{$rentas->fech_registro}}</td>
                <td class="border px-4 py-2">{{$rentas->fech_devol}}</td>
                <td class="border px-4 py-2">{{$rentas->fech_entrega}}</td>
                <td class="border px-4 py-2">{{$rentas->id_cliente}}</td>
                <td class="border px-4 py-2">{{$rentas->id_peli}}</td>
                <td class="border px-4 py-2 text-center">
                    <button  class="bg-blue-500 hover:bg-blue-600 rounded-md text-white font-bold py-2 px-4">Editar</button>
                    <button  class="bg-pink-800 hover:bg-pink-900 rounded-md text-white font-bold py-2 px-4">Borrar</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>