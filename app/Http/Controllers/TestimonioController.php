<?php

namespace App\Http\Controllers;

use App\Models\Testimonio;
use Illuminate\Http\Request;

class TestimonioController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_propietario' => ['required', 'string', 'max:255'],
            'nombre_mascota'     => ['required', 'string', 'max:255'],
            'calificacion'       => ['required', 'integer', 'min:1', 'max:5'],
            'comentario'         => ['required', 'string', 'min:10'],
        ]);

        Testimonio::create([
            'nombre_propietario' => $validated['nombre_propietario'],
            'nombre_mascota'     => $validated['nombre_mascota'],
            'calificacion'       => $validated['calificacion'],
            'comentario'         => $validated['comentario'],
            'aprobado'           => false,
        ]);

        return back()->with('success', 'Tu testimonio fue enviado y será revisado por nuestro equipo.');
    }
}
