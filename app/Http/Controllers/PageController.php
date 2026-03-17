<?php

namespace App\Http\Controllers;

use App\Models\Recomendacion;
use App\Models\Servicio;
use App\Models\Testimonio;
use App\Models\Veterinario;

class PageController extends Controller
{
    public function home()
    {
        $servicios   = Servicio::where('activo', true)->take(3)->get();
        $testimonios = Testimonio::where('aprobado', true)->take(3)->get();

        return view('pages.home', compact('servicios', 'testimonios'));
    }

    public function servicios()
    {
        $servicios = Servicio::where('activo', true)->get();

        return view('pages.servicios', compact('servicios'));
    }

    public function agendarCita()
    {
        $servicios    = Servicio::where('activo', true)->get();
        $veterinarios = Veterinario::where('activo', true)->get();

        return view('pages.agendar-cita', compact('servicios', 'veterinarios'));
    }

    public function veterinarios()
    {
        $veterinarios = Veterinario::where('activo', true)->get();

        return view('pages.veterinarios', compact('veterinarios'));
    }

    public function recomendaciones()
    {
        $recomendaciones = Recomendacion::orderBy('created_at', 'desc')->get();

        return view('pages.recomendaciones', compact('recomendaciones'));
    }

    public function testimonios()
    {
        $testimonios     = Testimonio::where('aprobado', true)->orderBy('created_at', 'desc')->get();
        $totalTestimonios = Testimonio::where('aprobado', true)->count();

        return view('pages.testimonios', compact('testimonios', 'totalTestimonios'));
    }

    public function chat()
    {
        return view('pages.chat');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }
}
