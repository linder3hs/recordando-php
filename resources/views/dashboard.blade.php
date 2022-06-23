<x-app-layout>
    <x-slot name="header">

    <nav class="flex justify-center space-x-4">
        <a href="/dashboard" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Películas</a>
        <a href="/team" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Rentar</a>
        <a href="/projects" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Acerca de nosotros</a>
        <a href="/planes" class="font-medium px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Planes y precios</a>
    </nav>
    
    </x-slot>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 w-full">

    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow " style="min-height: 160px;">
	
    <div>
        
	  <div class="relative block h-full object-none object-center bg-yellow-300 w-24 h-24">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
      
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  El joven manos de tijera
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P1.jpg')}}" >
    
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>

    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow" style="min-height: 160px;">
	
    <div>
	  <div class="relative block h-full">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  Rocky 1
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P2.jpg')}}" >
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>

    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow" style="min-height: 160px;">
	
    <div>
	  <div class="relative block h-full">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  Toy Story
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P3.jpg')}}" >
    
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>
    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow" style="min-height: 160px;">
	
    <div>
	  <div class="relative block h-full">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  Jurassic World
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P4.jpg')}}" >
    
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>
    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow" style="min-height: 160px;">
	
    <div>
	  <div class="relative block h-full">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  Shrek
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P5.jpg')}}" >
    
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>
    <div class="relative p-4 w-full bg-white rounded-lg overflow-hidden hover:shadow" style="min-height: 160px;">
	
    <div>
	  <div class="relative block h-full">
		<div class="h-32 bg-gray-100 rounded-lg"></div>
	  </div>
	</div>

	<h1 class="text-center font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">
	  2012
	</h1>
    <img class="mx-auto" src="{{URL::asset('img/P6.jpg')}}" >
    
    <button class="mt-4 px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md w-full">
	  Rentar
	</button>
    </div>
    
    </div>
    <footer>
    <div class="text-center p-6 bg-gray-200">
    <span>© 2022 Desarrollado por :</span>
    <a class="text-gray-600 font-semibold" >
        <ul>
            <li>Max Martinez</li>
            <li>Hilari Martinez</li>
        </ul>
    </a>
    </div>
    </footer>
</x-app-layout>
