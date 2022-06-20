<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'ape_paterno', 'ape_materno', 'fech_naci'];
}
