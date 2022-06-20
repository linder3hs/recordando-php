<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Renta;

class Rentas extends Component
{
    public $renta, $fech_registro, $fech_devol, $fech_entrega, $id_cliente, $id_peli;

    public function render()
    {
        $this->renta = Rentas::all();
        return view('livewire.rentas');
    }
}
