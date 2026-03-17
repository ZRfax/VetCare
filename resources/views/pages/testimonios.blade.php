@extends('layouts.app')
@section('title', 'Testimonios')

@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-slate-800">Testimonios de Nuestros Clientes</h1>
        <p class="text-slate-500 mt-3">Lo que nuestros clientes dicen sobre nuestros servicios</p>
        <div class="flex items-center justify-center gap-2 mt-4">
            <div class="flex text-yellow-400 text-xl">★★★★★</div>
            <span class="text-slate-600 font-medium">5</span>
            <span class="text-slate-400 text-sm">calificación promedio</span>
            <span class="text-slate-300 mx-2">|</span>
            <span class="text-slate-500 text-sm">6+ reseñas</span>
        </div>
    </div>
</section>

{{-- Testimonials Grid --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @php
        $testimonios = [
            [
                'stars' => 5,
                'text' => 'Excelente atención para mi mascota. El Dr. Carlos fue muy profesional y cariñoso con mi perro. Los resultados fueron increíbles, totalmente recomendado.',
                'name' => 'María González',
                'role' => 'Propietaria de Max',
                'date' => 'Febrero 2026',
                'color' => 'bg-teal-50',
            ],
            [
                'stars' => 5,
                'text' => 'Mi gato tuvo una emergencia y el equipo de VetCare respondió de manera increíble. Los atendieron de inmediato con mucho profesionalismo. ¡Gracias!',
                'name' => 'Roberto Martínez',
                'role' => 'Propietario de Whiskers',
                'date' => 'Febrero 2026',
                'color' => 'bg-blue-50',
            ],
            [
                'stars' => 5,
                'text' => 'La Dra. Ana García es simplemente la mejor. Mi mascota ya no tenía miedo al veterinario gracias a su trato tan amable y dedicado.',
                'name' => 'Ana Rodríguez',
                'role' => 'Propietaria de Luna',
                'date' => 'Enero 2026',
                'color' => 'bg-teal-50',
            ],
            [
                'stars' => 5,
                'text' => 'Llevo años llevando a mis mascotas a VetCare y siempre me brindan la mejor atención. El personal es amable y las instalaciones están muy bien equipadas.',
                'name' => 'Carlos Hernández',
                'role' => 'Cliente frecuente',
                'date' => 'Enero 2026',
                'color' => 'bg-blue-50',
            ],
            [
                'stars' => 5,
                'text' => 'Me quedé muy sorprendida con la calidad del servicio. La atención es muy completa y el precio es justo. Sin duda volveré con mis mascotas.',
                'name' => 'Laura Sánchez',
                'role' => 'Propietaria de Coco',
                'date' => 'Diciembre 2025',
                'color' => 'bg-teal-50',
            ],
            [
                'stars' => 5,
                'text' => 'Los análisis de laboratorio fueron rápidos y precisos. El Dr. Luis nos explicó todo con detalle y nos dió un plan de tratamiento efectivo para nuestro gato.',
                'name' => 'Jorge Ramírez',
                'role' => 'Propietario de Nala',
                'date' => 'Diciembre 2025',
                'color' => 'bg-blue-50',
            ],
        ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testimonios as $t)
            <div class="rounded-2xl border border-slate-100 p-6 {{ $t['color'] }} hover:shadow-md transition-shadow">
                <div class="flex text-yellow-400 text-lg mb-3">
                    @for ($i = 0; $i < $t['stars']; $i++) ★ @endfor
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mb-5">"{{ $t['text'] }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-sm shrink-0">
                        {{ substr($t['name'], 0, 1) }}
                    </div>
                    <div>
                        <p class="font-semibold text-slate-800 text-sm">{{ $t['name'] }}</p>
                        <p class="text-slate-400 text-xs">{{ $t['role'] }} · {{ $t['date'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

{{-- CTA Banner --}}
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-500 to-teal-400 rounded-2xl p-10 text-center text-white">
            <h2 class="text-2xl lg:text-3xl font-bold mb-2">¿Ya probaste nuestros servicios?</h2>
            <p class="text-blue-100 mb-6">Tu opinión es muy importante para nosotros. Ayúdanos a seguir mejorando compartiendo tu experiencia.</p>
            <div class="flex items-center justify-center gap-4 flex-wrap">
                <a href="{{ route('chat') }}"
                   class="bg-white text-teal-600 hover:bg-teal-50 font-semibold px-6 py-3 rounded-lg transition-colors">
                    Dejar Comentario
                </a>
                <a href="{{ route('servicios') }}"
                   class="border border-white text-white hover:bg-white/10 font-semibold px-6 py-3 rounded-lg transition-colors">
                    Ver Servicios
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Stats --}}
<section class="py-14 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div>
                <p class="text-4xl font-bold text-teal-500">98%</p>
                <p class="text-slate-500 mt-1">Clientes Satisfechos</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-teal-500">5,000+</p>
                <p class="text-slate-500 mt-1">Mascotas Atendidas</p>
            </div>
            <div>
                <p class="text-4xl font-bold text-teal-500">15+</p>
                <p class="text-slate-500 mt-1">Años de Experiencia</p>
            </div>
        </div>
    </div>
</section>

@endsection
