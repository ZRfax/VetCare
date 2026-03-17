<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = ['nombre', 'descripcion', 'imagen', 'icono', 'activo'];

    protected $casts = [
        'activo' => 'boolean',
    ];
}
