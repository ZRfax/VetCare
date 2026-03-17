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

            {{-- Dr. Carlos Mendoza --}}
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/Ricardo.jpg') }}" alt="Dr. Carlos Mendoza" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-800">Dr. Carlos Mendoza</h3>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <span class="text-sm text-teal-600 font-medium">Medicina Interna</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-1">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Medicina Interna Clínica
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-3">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        8 años de experiencia
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Especialista en diagnóstico y tratamiento de enfermedades crónicas en mascotas.
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

            {{-- Dra. Ana García --}}
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/Monica.jpg') }}" alt="Dra. Ana García" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-800">Dra. Ana García</h3>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <span class="text-sm text-teal-600 font-medium">Medicina Interna</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-1">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Diagnóstico por imagen
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-3">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        6 años de experiencia
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Experta en diagnóstico de enfermedades infecciosas, internas y procesos preventivos.
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

            {{-- Dr. Luis Ramírez --}}
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/Ryan.jpg') }}" alt="Dr. Luis Ramírez" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-800">Dr. Luis Ramírez</h3>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <span class="text-sm text-teal-600 font-medium">Urgencias y Cuidados</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-1">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Urgencias y cuidados intensivos
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-3">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        5 años de experiencia
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Especializado en atención de emergencias y casos críticos las 24 horas del día.
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

            {{-- Dra. María Torres --}}
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/Karla.jpg') }}" alt="Dra. María Torres" class="w-full h-64 object-cover object-top">
                <div class="p-6">
                    <h3 class="text-xl font-bold text-slate-800">Dra. María Torres</h3>
                    <div class="flex items-center gap-2 mt-1 mb-2">
                        <span class="text-sm text-teal-600 font-medium">Dermatología</span>
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-1">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                        Dermatología y nutrición
                    </div>
                    <div class="flex items-center gap-1 text-sm text-slate-500 mb-3">
                        <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        7 años de experiencia
                    </div>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">
                        Especialista en problemas de piel y pelaje con tratamientos personalizados para cada mascota.
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
