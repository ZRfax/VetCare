<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function servicios()
    {
        return view('pages.servicios');
    }

    public function agendarCita()
    {
        return view('pages.agendar-cita');
    }

    public function veterinarios()
    {
        return view('pages.veterinarios');
    }

    public function recomendaciones()
    {
        return view('pages.recomendaciones');
    }

    public function testimonios()
    {
        return view('pages.testimonios');
    }

    public function chat()
    {
        return view('pages.chat');
    }

    public function contacto()
    {
        return view('pages.contacto');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }
}