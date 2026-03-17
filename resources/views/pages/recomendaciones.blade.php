@extends('layouts.app')
@section('title', 'Recomendaciones')

@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-slate-800">Recomendaciones y Consejos</h1>
        <p class="text-slate-500 mt-3 max-w-xl mx-auto">
            Artículos y guías sobre el cuidado de tu mascota escritos por nuestros veterinarios expertos.
        </p>
    </div>
</section>

{{-- Blog Grid --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
        $posts = [
            [
                'img' => 'recomendacion1.jpg',
                'category' => 'Salud',
                'category_color' => 'bg-teal-100 text-teal-700',
                'date' => '10 Mar 2026',
                'title' => 'Cuidados Básicos para tu Mascota',
                'excerpt' => 'Aprende los cuidados esenciales que debes mantener a tu mascota para garantizar su higiene, ejercicio y atención diaria.',
            ],
            [
                'img' => 'recomendacion2.jpg',
                'category' => 'Salud',
                'category_color' => 'bg-teal-100 text-teal-700',
                'date' => '8 Mar 2026',
                'title' => 'Calendario de Vacunación para Perros',
                'excerpt' => 'Guía completa sobre el esquema de vacunación recomendado para perros desde cachorros hasta adultos mayores.',
            ],
            [
                'img' => 'recomendacion3.jpg',
                'category' => 'Nutrición',
                'category_color' => 'bg-blue-100 text-blue-700',
                'date' => '5 Mar 2026',
                'title' => 'Nutrición Adecuada para Gatos',
                'excerpt' => 'Descubre la dieta ideal para tu gato: las mejores fuentes alimenticias y como implementar una dieta balanceada y saludable.',
            ],
            [
                'img' => 'recomendacion4.jpg',
                'category' => 'Salud',
                'category_color' => 'bg-teal-100 text-teal-700',
                'date' => '1 Mar 2026',
                'title' => 'Prevención de Enfermedades Comunes',
                'excerpt' => 'Conoce las enfermedades más frecuentes en mascotas y cómo prevenirlas con chequeos periódicos y vacunación.',
            ],
            [
                'img' => 'recomendacion5.jpg',
                'category' => 'Emergencias',
                'category_color' => 'bg-red-100 text-red-700',
                'date' => '25 Feb 2026',
                'title' => 'Salidas de Emergencia en Mascotas',
                'excerpt' => 'Identifica los síntomas que requieren atención veterinaria inmediata y cómo actuar ante situaciones de emergencia.',
            ],
            [
                'img' => 'recomendacion6.png',
                'category' => 'Nutrición',
                'category_color' => 'bg-blue-100 text-blue-700',
                'date' => '20 Feb 2026',
                'title' => 'Beneficios de la Alimentación Natural',
                'excerpt' => 'Todo sobre la dieta natural para tu mascota: beneficios, cómo implementarla correctamente y qué alimentos evitar.',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
            <article class="bg-white rounded-2xl border border-slate-100 shadow-sm overflow-hidden hover:shadow-lg transition-shadow">
                <img src="{{ asset('img/' . $post['img']) }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-xs font-semibold px-3 py-1 rounded-full {{ $post['category_color'] }}">
                            {{ $post['category'] }}
                        </span>
                        <span class="text-xs text-slate-400">{{ $post['date'] }}</span>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg leading-snug mb-2">{{ $post['title'] }}</h3>
                    <p class="text-slate-500 text-sm leading-relaxed mb-4">{{ $post['excerpt'] }}</p>
                    <a href="#" class="inline-flex items-center gap-1 text-teal-600 hover:text-teal-700 text-sm font-medium transition-colors">
                        Leer más
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
    </div>
</section>

@endsection
