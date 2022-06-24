<?php

namespace App\Http\Livewire;

use App\Models\Pelicula;
use App\Models\Renta;
use DateTime;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Peliculas extends Component
{

//    Para bloquear a usaurio que no son administrador
//      Recuerda que esto es para el administrador de aca lo mueves al livewire del admin
// comentario: php artisan make:livewire NombreDeVista 
//    public function mount()
//    {
//        if (Auth::user()->rol != 1) {
//            return redirect()->to('/');
//        }
//    }

    public function render() {
        $peliculas = Pelicula::all();
        return view('dashboard', compact('peliculas'));
    }

    public function rentar(int $idPelicula) {
        $date = new DateTime(date("y-m-d"));

        $date->modify('+7 day');

        Renta::create([
            'id_peli' => $idPelicula,
            'user_id' => Auth::user()->id,
            'fech_registro' => date("y-m-d"),
            'fech_devol' => $date->format('Y-m-d'),
            'fech_entrega' => $date->format('Y-m-d')
        ]);

        return redirect()->to('dashboard');
    }

}
