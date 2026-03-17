<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veterinario extends Model
{
    protected $fillable = ['nombre', 'especialidad', 'descripcion', 'foto', 'activo'];

    protected $casts = [
        'activo' => 'boolean',
    ];
}
