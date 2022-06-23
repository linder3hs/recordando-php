<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Peliculas extends Component
{

    public function render()
    {
        $peliculas = DB::table('pelicula')->select('pelicula.*')->get();
        return view('dashboard', compact('peliculas'));
    }

    
}
