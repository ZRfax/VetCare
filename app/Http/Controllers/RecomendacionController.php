<?php

namespace App\Http\Controllers;

use App\Models\Recomendacion;

class RecomendacionController extends Controller
{
    public function show(Recomendacion $recomendacion)
    {
        return view('pages.recomendacion-detalle', compact('recomendacion'));
    }
}
