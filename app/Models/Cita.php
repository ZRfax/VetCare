<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'user_id',
        'nombre_propietario',
        'nombre_mascota',
        'especie',
        'raza',
        'servicio_id',
        'veterinario_id',
        'fecha',
        'hora',
        'notas',
        'estado',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function veterinario()
    {
        return $this->belongsTo(Veterinario::class);
    }
}
