@extends('layouts.app')
@section('title', 'Veterinarios')

@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-slate-800">Nuestros Veterinarios</h1>
        <p class="text-slate-500 mt-3 max-w-xl mx-auto">
            Conoce a nuestro equipo de profesionales altamente calificados y comprometidos con el bienestar de tu mascota.
        </p>
    </div>
</section>

{{-- Vet Cards --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

            @foreach ($veterinarios as $vet)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/' . $vet->foto) }}" alt="{{ $vet->nombre }}" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-800">{{ $vet->nombre }}</h3>
                    <div class="flex items-center gap-2 mt-1 mb-3">
                        <span class="text-sm text-teal-600 font-medium">{{ $vet->especialidad }}</span>
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        {{ $vet->descripcion }}
                    </p>
                    <a href="{{ route('agendar-cita') }}"
                       class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-medium px-4 py-2.5 rounded-lg transition-all text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Agendar Cita
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <p class="text-4xl font-bold text-teal-500">15+</p>
                <p class="text-slate-500 mt-1">Años de Experiencia</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-teal-500">5,000+</p>
                <p class="text-slate-500 mt-1">Mascotas Atendidas</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-teal-500">98%</p>
                <p class="text-slate-500 mt-1">Satisfacción</p>
            </div>
        </div>
    </div>
</section>

@endsection
