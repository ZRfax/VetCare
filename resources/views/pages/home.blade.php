@extends('layouts.app')
@section('title', 'Inicio')

@section('content')

{{-- Hero --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h1 class="text-4xl lg:text-5xl font-bold text-slate-800 leading-tight">Cuidamos la salud de tu mejor amigo</h1>
                <p class="mt-4 text-slate-500 text-lg leading-relaxed">Brindamos atención veterinaria profesional con dedicación, experiencia y amor por los animales. Tu mascota merece lo mejor.</p>
                <div class="mt-8 flex items-center gap-4 flex-wrap">
                    <a href="{{ route('agendar-cita') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-semibold px-6 py-3 rounded-lg transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Agendar Cita
                    </a>
                    <a href="{{ route('chat') }}" class="border border-teal-500 text-teal-600 hover:bg-teal-50 font-semibold px-6 py-3 rounded-lg transition-colors flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                        Abrir Chat
                    </a>
                </div>
            </div>
            <div>
                <img src="{{ asset('img/img_inicio.jpg') }}" alt="Veterinaria cuidando a una mascota" class="rounded-2xl shadow-xl w-full object-cover h-80 lg:h-96">
            </div>
        </div>
    </div>
</section>

{{-- Services Preview --}}
<section class="py-16 lg:py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-slate-800">Nuestros Servicios</h2>
            <p class="text-slate-500 mt-2">Ofrecemos atención integral para el bienestar de tu mascota</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Consulta General</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Evaluación completa del estado de salud de tu mascota por nuestros especialistas.</p>
            </div>
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Vacunación</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Programa completo de vacunación para proteger a tu mascota de enfermedades.</p>
            </div>
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Desparasitación</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Tratamiento preventivo y curativo contra parásitos internos y externos.</p>
            </div>
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Control Preventivo</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Chequeos periódicos para mantener la salud óptima de tu mascota.</p>
            </div>
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Emergencias</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Atención inmediata las 24 horas para casos de urgencia veterinaria.</p>
            </div>
            <div class="bg-white rounded-xl border border-slate-100 shadow-sm hover:shadow-md transition-shadow p-6">
                <div class="w-12 h-12 bg-teal-50 rounded-xl flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Orientación Médica</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Asesoramiento profesional sobre nutrición, comportamiento y cuidados.</p>
            </div>
        </div>
        <div class="text-center mt-10">
            <a href="{{ route('servicios') }}" class="inline-flex items-center gap-2 border border-teal-500 text-teal-600 hover:bg-teal-50 font-medium px-6 py-3 rounded-lg transition-colors">
                Ver todos los servicios
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
