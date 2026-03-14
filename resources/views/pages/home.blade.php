@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container hero-grid">
        <div class="hero-text">
            <h1>Cuidamos la salud de tu mejor amigo</h1>
            <p>Brindamos atención veterinaria profesional con dedicación, experiencia y amor por los animales.</p>
            <div class="hero-buttons">
                <a href="{{ route('agendar-cita') }}" class="btn-primary">Agendar Cita</a>
                <a href="{{ route('chat') }}" class="btn-secondary">Abrir Chat</a>
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('img/img_inicio.jpg') }}" alt="VetCare">
        </div>
    </div>
</section>
@endsection