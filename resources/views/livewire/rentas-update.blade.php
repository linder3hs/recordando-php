
<div>
    <x-slot name="header">
        <h1 class="text-gray-900">CRUD con Laravel y Livewire</h1>
    </x-slot>
    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
        <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 transition-opacity">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                <form method="post" action="{{ route('renta-update-post') }}">
                    @csrf
                    <input type="hidden" name="id_renta" value="{{ $renta->id_renta }}">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <h4>Modificando renta del Usuario: {{ $renta->name }}</h4>
                        <h6>Pelicula: {{ $renta->nombre_peli }}</h6>
                        <div class="mb-4 mt-4">
                            <label for="fecha_registro" class="block text-gray-700 text-sm font-bold mb-2">fech_registro:</label>
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="fech_registro" type="text" value="{{$renta->fech_registro}}">
                        </div>

                        <div class="mb-4">
                            <label for="fech_devol" class="block text-gray-700 text-sm font-bold mb-2">fech_devol:</label>
                            <input  class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="fech_devol" type="date" value="{{$renta->fech_devol}}">
                        </div>

                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button type="submit" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
