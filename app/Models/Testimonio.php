<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonio extends Model
{
    protected $fillable = ['nombre_propietario', 'nombre_mascota', 'calificacion', 'comentario', 'aprobado'];

    protected $casts = [
        'aprobado' => 'boolean',
    ];
}
