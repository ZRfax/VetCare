@extends('layouts.app')
@section('title', $recomendacion->titulo)

@section('content')

{{-- Hero Image --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-10">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Breadcrumb --}}
        <nav class="flex items-center gap-2 text-sm text-slate-500 mb-6">
            <a href="{{ route('home') }}" class="hover:text-teal-600 transition-colors">Inicio</a>
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="{{ route('recomendaciones') }}" class="hover:text-teal-600 transition-colors">Recomendaciones</a>
            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-slate-700 font-medium truncate max-w-xs">{{ $recomendacion->titulo }}</span>
        </nav>

        {{-- Category Badge + Title --}}
        @php
            $categoryColor = match($recomendacion->categoria) {
                'Salud'       => 'bg-teal-100 text-teal-700',
                'Nutrición'   => 'bg-blue-100 text-blue-700',
                'Emergencias' => 'bg-red-100 text-red-700',
                default       => 'bg-slate-100 text-slate-700',
            };
        @endphp

        <span class="inline-block text-xs font-semibold px-3 py-1 rounded-full {{ $categoryColor }} mb-4">
            {{ $recomendacion->categoria }}
        </span>

        <h1 class="text-3xl lg:text-4xl font-bold text-slate-800 leading-tight mb-4">
            {{ $recomendacion->titulo }}
        </h1>

        <div class="flex items-center gap-4 text-sm text-slate-500">
            <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                {{ $recomendacion->autor }}
            </div>
            <div class="flex items-center gap-1.5">
                <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                {{ $recomendacion->created_at->format('d M Y') }}
            </div>
        </div>
    </div>
</section>

{{-- Article Image --}}
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 -mt-2 mb-8">
    <img src="{{ asset('img/' . $recomendacion->imagen) }}"
         alt="{{ $recomendacion->titulo }}"
         class="w-full h-72 object-cover rounded-2xl shadow-md">
</div>

{{-- Article Content --}}
<section class="py-8 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Main Content --}}
            <div class="lg:col-span-2">
                <div class="text-slate-600 leading-relaxed space-y-4 article-content">
                    {!! $recomendacion->contenido !!}
                </div>
            </div>

            {{-- Sidebar --}}
            <aside class="lg:col-span-1">

                {{-- CTA Agendar Cita --}}
                <div class="bg-gradient-to-br from-blue-500 to-teal-400 rounded-2xl p-6 text-white mb-6">
                    <h3 class="font-bold text-lg mb-2">¿Tienes alguna duda?</h3>
                    <p class="text-blue-100 text-sm mb-4">Agenda una consulta con nuestros veterinarios expertos.</p>
                    <a href="{{ route('agendar-cita') }}"
                       class="inline-flex items-center gap-2 bg-white text-teal-600 hover:bg-teal-50 font-semibold px-4 py-2.5 rounded-lg transition-colors text-sm w-full justify-center">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        Agendar Cita
                    </a>
                </div>

                {{-- Back to articles --}}
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-100">
                    <h3 class="font-bold text-slate-800 mb-3">Más Artículos</h3>
                    <p class="text-slate-500 text-sm mb-4">Explora más consejos y recomendaciones de nuestros expertos.</p>
                    <a href="{{ route('recomendaciones') }}"
                       class="inline-flex items-center gap-2 text-teal-600 hover:text-teal-700 text-sm font-medium transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                        </svg>
                        Ver todas las recomendaciones
                    </a>
                </div>

            </aside>
        </div>
    </div>
</section>

{{-- CTA Bottom --}}
<section class="py-14 bg-slate-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-500 to-teal-400 rounded-2xl p-10 text-center text-white">
            <h2 class="text-2xl lg:text-3xl font-bold mb-2">¿Listo para cuidar mejor a tu mascota?</h2>
            <p class="text-blue-100 mb-6">Nuestros veterinarios están disponibles para resolver todas tus dudas.</p>
            <div class="flex items-center justify-center gap-4 flex-wrap">
                <a href="{{ route('agendar-cita') }}"
                   class="bg-white text-teal-600 hover:bg-teal-50 font-semibold px-6 py-3 rounded-lg transition-colors">
                    Agendar Cita
                </a>
                <a href="{{ route('contacto') }}"
                   class="border border-white text-white hover:bg-white/10 font-semibold px-6 py-3 rounded-lg transition-colors">
                    Contáctanos
                </a>
            </div>
        </div>
    </div>
</section>

<style>
.article-content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1e293b;
    margin-top: 2rem;
    margin-bottom: 0.75rem;
}
.article-content h3 {
    font-size: 1.25rem;
    font-weight: 600;
    color: #334155;
    margin-top: 1.5rem;
    margin-bottom: 0.5rem;
}
.article-content p {
    margin-bottom: 1rem;
}
.article-content ul, .article-content ol {
    padding-left: 1.5rem;
    margin-bottom: 1rem;
}
.article-content li {
    margin-bottom: 0.25rem;
}
</style>

@endsection
