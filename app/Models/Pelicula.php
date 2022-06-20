<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    use HasFactory;
    protected $fillable = ['nombre_peli', 'director', 'genero', 'artista1', 'artista2'];
}
