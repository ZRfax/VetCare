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
            <span class="text-slate-500 text-sm">{{ $totalTestimonios }}+ reseñas</span>
        </div>
    </div>
</section>

{{-- Submit Testimonio Form --}}
<section id="form-testimonio" class="py-16 bg-slate-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <h2 class="text-2xl font-bold text-slate-800 text-center mb-2">Comparte tu Experiencia</h2>
            <p class="text-slate-500 text-center text-sm mb-6">Tu opinión nos ayuda a seguir mejorando nuestros servicios.</p>

            {{-- Flash Messages --}}
            @if (session('success'))
            <div class="bg-teal-50 border border-teal-200 text-teal-700 rounded-lg px-4 py-3 text-sm mb-6">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-600 rounded-lg px-4 py-3 text-sm mb-6">
                <ul class="list-disc list-inside space-y-1">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('testimonios.store') }}" method="POST" class="space-y-5">
                @csrf

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Tu Nombre <span class="text-red-500">*</span></label>
                        <input type="text" name="nombre_propietario" value="{{ old('nombre_propietario') }}"
                               placeholder="Juan Pérez"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400 @error('nombre_propietario') border-red-400 @enderror"
                               required>
                        @error('nombre_propietario')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Nombre de tu Mascota <span class="text-red-500">*</span></label>
                        <input type="text" name="nombre_mascota" value="{{ old('nombre_mascota') }}"
                               placeholder="Max"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400 @error('nombre_mascota') border-red-400 @enderror"
                               required>
                        @error('nombre_mascota')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Star Rating --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Calificación <span class="text-red-500">*</span></label>
                    <div class="flex items-center gap-1 star-rating">
                        @for ($i = 5; $i >= 1; $i--)
                        <input type="radio" id="star{{ $i }}" name="calificacion" value="{{ $i }}"
                               class="sr-only" {{ old('calificacion') == $i ? 'checked' : ($i == 5 && !old('calificacion') ? 'checked' : '') }}>
                        <label for="star{{ $i }}" class="text-3xl cursor-pointer text-slate-300 hover:text-yellow-400 transition-colors star-label" data-value="{{ $i }}">★</label>
                        @endfor
                    </div>
                    @error('calificacion')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Tu Comentario <span class="text-red-500">*</span></label>
                    <textarea name="comentario" rows="4"
                              placeholder="Cuéntanos tu experiencia con nuestros servicios..."
                              class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400 resize-none @error('comentario') border-red-400 @enderror"
                              required>{{ old('comentario') }}</textarea>
                    @error('comentario')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-semibold py-3 rounded-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    Enviar Testimonio
                </button>
            </form>
        </div>
    </div>
</section>

{{-- Testimonials Grid --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if ($testimonios->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($testimonios as $t)
            @php $bgColor = $loop->index % 2 === 0 ? 'bg-teal-50' : 'bg-blue-50'; @endphp
            <div class="rounded-2xl border border-slate-100 p-6 {{ $bgColor }} hover:shadow-md transition-shadow">
                <div class="flex text-yellow-400 text-lg mb-3">
                    @for ($i = 0; $i < $t->calificacion; $i++) ★ @endfor
                    @for ($i = $t->calificacion; $i < 5; $i++) <span class="text-slate-300">★</span> @endfor
                </div>
                <p class="text-slate-600 text-sm leading-relaxed mb-5">"{{ $t->comentario }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-sm shrink-0">
                        {{ substr($t->nombre_propietario, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-semibold text-slate-800 text-sm">{{ $t->nombre_propietario }}</p>
                        <p class="text-slate-400 text-xs">Propietario/a de {{ $t->nombre_mascota }} · {{ $t->created_at->format('F Y') }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center py-12">
            <p class="text-slate-400 text-lg">Aún no hay testimonios aprobados. ¡Sé el primero en compartir tu experiencia!</p>
        </div>
        @endif

    </div>
</section>

{{-- CTA Banner --}}
<section class="py-14 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-r from-blue-500 to-teal-400 rounded-2xl p-10 text-center text-white">
            <h2 class="text-2xl lg:text-3xl font-bold mb-2">¿Ya probaste nuestros servicios?</h2>
            <p class="text-blue-100 mb-6">Tu opinión es muy importante para nosotros. Ayúdanos a seguir mejorando compartiendo tu experiencia.</p>
            <div class="flex items-center justify-center gap-4 flex-wrap">
                <a href="#form-testimonio"
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
                <p class="text-4xl font-bold text-teal-500">{{ $totalTestimonios }}+</p>
                <p class="text-slate-500 mt-1">Reseñas de Clientes</p>
            </div>
        </div>
    </div>
</section>

<style>
.star-rating {
    flex-direction: row-reverse;
    justify-content: flex-end;
}
.star-rating input:checked ~ label,
.star-rating label:hover,
.star-rating label:hover ~ label {
    color: #facc15;
}
</style>

@endsection
