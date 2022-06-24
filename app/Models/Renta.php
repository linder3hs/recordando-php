<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;

    protected $table = "renta";

    protected $primaryKey = "id_renta";

    protected $fillable = ['fech_registro', 'fech_devol', 'fech_entrega', 'id_cliente', 'id_peli', 'user_id'];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function pelicula()
    {
        return $this->hasOne(Pelicula::class);
    }
}
