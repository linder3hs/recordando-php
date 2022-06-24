<?php

namespace App\Http\Livewire;

use App\Models\Renta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class RentasUpdate extends Component
{

    public $id_renta;

    public function mount($id_renta = null) {
        $this->id_renta = $id_renta;
    }

    public function render() {
        $renta = DB::table('renta')
            ->join('users', 'users.id', '=', 'renta.user_id')
            ->join('pelicula', 'pelicula.id_peli', '=', 'renta.id_peli')
            ->select('renta.*', 'users.*', 'pelicula.*')
            ->where('renta.id_renta', $this->id_renta)
            ->first();
        return view('livewire.rentas-update',compact('renta'));
    }

    public function update(Request $request) {
        $renta = Renta::find($request->get('id_renta'));
        $renta->update($request->all());

        return redirect()->to('/rentas');
    }
}
