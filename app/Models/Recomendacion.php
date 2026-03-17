<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recomendacion extends Model
{
    protected $table = 'recomendaciones';

    protected $fillable = ['titulo', 'resumen', 'contenido', 'categoria', 'imagen', 'autor', 'slug'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
