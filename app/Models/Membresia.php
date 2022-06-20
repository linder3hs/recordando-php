<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    use HasFactory;
    protected $fillable = ['fech_expe', 'fech_expi', 'id_cliente'];
}
