<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pelicula;
class Peliculas extends Component
{
    public $pelicula, $id_peli, $nombre_peli, $director, $genero, $artista1, $artista2;
    public $modal = false;

    public function render($id_peli)
    {
        $this->pelicula = Pelicula::where($id_peli)->get();
        return view('livewire.peliculas');
    }

    public function abrirModal()
    {
        $this->modal = true;
    }

    public function cerrarModal()
    {
        $this->modal = false;
    }

    public function mostrar($id)
    {
        $this->id_peli = $id;
        $this->nombre_peli = $pelicula->nombre_peli;
        $this->director = $pelicula->director;
        $this->genero = $pelicula->genero;
        $this->artista1 = $pelicula->artista1;
        $this->artista2 = $pelicula->artista2;
        $this->abrirModal();
    }
}
