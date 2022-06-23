<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Renta;
use Illuminate\Http\Request;

class Rentas extends Component
{
    
    public function render()
    {
        $rentas = DB::table('renta')
            ->join('users', 'users.id', '=', 'renta.user_id')
            ->join('pelicula', 'users.id', '=', 'renta.id_peli')
            ->select('renta.*', 'users.*', 'pelicula.*')
            ->where('renta.user_id', Auth::user()->id)
            ->get();

        return view('livewire.rentas', compact('rentas'));
    }

    public function edit($id_renta) {
        $renta = DB::table('renta')
            ->join('users', 'users.id', '=', 'renta.user_id')
            ->join('pelicula', 'users.id', '=', 'renta.id_peli')
            ->select('renta.', 'users.', 'pelicula.*')
            ->where('renta.id_renta', $id_renta)
            ->first();

        return view('livewire.rentas_update', compact('rentas'));
    }


    public function update(Request $request, $id_renta) {
        Renta::findOrFail($id_renta)->update($request->all());

        return redirect()->to("/rentas");
    }

    public function delete(int $id_renta){
        Renta::destroy($id_renta);

        return redirect()->to("/rentas");
    }
}
