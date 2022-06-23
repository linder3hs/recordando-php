<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;
    protected $fillable = ['fech_registro', 'fech_devol', 'fech_entrega', 'id_cliente', 'id_peli'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function pelicula()
    {
        return $this->hasOne(Pelicula::class);
    }
}
