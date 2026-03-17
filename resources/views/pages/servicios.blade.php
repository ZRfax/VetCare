@extends('layouts.app')
@section('title', 'Servicios')

@section('content')

<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/></svg>
        </div>
        <h1 class="text-4xl font-bold text-slate-800">Nuestros Servicios</h1>
        <p class="text-slate-500 mt-3 max-w-xl mx-auto">Ofrecemos atención veterinaria con los más altos estándares de calidad y profesionalismo.</p>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            @php
            $services = [
                ['img'=>'consulta_general.jpg','title'=>'Consulta General','desc'=>'Revisión completa del estado de salud de tu mascota con diagnóstico y recomendaciones personalizadas.','items'=>['Examen físico completo','Diagnóstico de enfermedades','Plan de tratamiento']],
                ['img'=>'cirugia.jpeg','title'=>'Cirugía','desc'=>'Procedimientos quirúrgicos con el equipo de cirujanos y los mejores estándares de seguridad.','items'=>['Cirugías de tejidos blandos','Anestesia general','Cirugías ortopédicas']],
                ['img'=>'vacunacion.jpg','title'=>'Vacunación','desc'=>'Programa completo de vacunación para proteger a tu mascota de enfermedades infecciosas.','items'=>['Vacunas para perros y gatos','Esquema de vacunación','Recordatorio de refuerzos']],
                ['img'=>'urgencias.jpg','title'=>'Urgencias 24/7','desc'=>'Atención veterinaria de emergencia disponible las 24 horas del día, los 7 días de la semana.','items'=>['Atención inmediata','Equipos de emergencia','Cuidados intensivos']],
                ['img'=>'laboratorio.jpg','title'=>'Laboratorio','desc'=>'Análisis clínicos y diagnóstico mediante equipos de última generación para resultados precisos.','items'=>['Análisis de sangre','Urianálisis','Diagnóstico por imagen']],
                ['img'=>'odontologia.jpg','title'=>'Odontología','desc'=>'Cuidado dental especializado para mantener la salud bucal de tu mascota y prevenir enfermedades.','items'=>['Limpieza dental','Extracción de piezas','Tratamiento periodontal']],
            ];
            @endphp

            @foreach($services as $s)
            <div class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/'.$s['img']) }}" alt="{{ $s['title'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="font-semibold text-slate-800 text-lg mb-2">{{ $s['title'] }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-3">{{ $s['desc'] }}</p>
                    <ul class="text-slate-500 text-sm space-y-1 mb-4">
                        @foreach($s['items'] as $item)
                        <li class="flex items-center gap-2">
                            <svg class="w-3.5 h-3.5 text-teal-500 shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                            {{ $item }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('agendar-cita') }}" class="w-full flex items-center justify-center gap-2 bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-medium px-4 py-2.5 rounded-lg transition-all text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        Agendar Cita
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="py-16 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-bold text-slate-800 text-center mb-10">¿Por qué elegirnos?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="w-14 h-14 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Cuidado Profesional</h3>
                <p class="text-slate-500 text-sm">Equipo de veterinarios altamente capacitados con años de experiencia.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Tecnología Avanzada</h3>
                <p class="text-slate-500 text-sm">Equipamiento de última generación para diagnósticos precisos.</p>
            </div>
            <div class="text-center">
                <div class="w-14 h-14 bg-teal-50 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-7 h-7 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <h3 class="font-semibold text-slate-800 text-lg mb-2">Disponibilidad 24/7</h3>
                <p class="text-slate-500 text-sm">Siempre disponibles para atender las emergencias de tu mascota.</p>
            </div>
        </div>
    </div>
</section>

<section class="py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-500 to-teal-400 rounded-2xl p-10 text-center text-white">
            <h2 class="text-2xl lg:text-3xl font-bold mb-2">¿Necesitas agendar una cita?</h2>
            <p class="text-blue-100 mb-6">Estamos listos para cuidar de tu mascota con el profesionalismo que merece</p>
            <a href="{{ route('agendar-cita') }}" class="inline-flex items-center gap-2 bg-white text-teal-600 hover:bg-teal-50 font-semibold px-6 py-3 rounded-lg transition-colors">
                Agendar Cita Ahora
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
            </a>
        </div>
    </div>
</section>

@endsection
