<?php

use App\Http\Livewire\Peliculas;
use App\Http\Livewire\RentasUpdate;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Rentas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/rentas', Rentas::class);
    Route::get('/rentas/actualizar/{id_renta}', RentasUpdate::class)->name('renta-update');
    Route::post('/renta-update', [RentasUpdate::class, 'update'])->name('renta-update-post');
    Route::get('/dashboard', Peliculas::class)->name('dashboard');
    Route::get('/rentar-pelicula/{idPelicula}', [Peliculas::class, 'rentar'])->name('rentar-pelicula');
});
