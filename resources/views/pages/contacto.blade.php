@extends('layouts.app')
@section('title', 'Contacto')

@section('content')

{{-- Header --}}
<section class="bg-gradient-to-br from-blue-50 to-teal-50 py-14">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
            </svg>
        </div>
        <h1 class="text-4xl font-bold text-slate-800">Contáctanos</h1>
        <p class="text-slate-500 mt-3 max-w-xl mx-auto">
            Estamos aquí para ayudarte. Ponte en contacto con nosotros por cualquier medio.
        </p>
    </div>
</section>

{{-- Contact Info + Map --}}
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

            {{-- Info --}}
            <div>
                <h2 class="text-2xl font-bold text-slate-800 mb-6">Información de Contacto</h2>
                <div class="space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Dirección</p>
                            <p class="text-slate-500 text-sm mt-0.5">Av. Principal 123, Centro<br>Ciudad, Estado 12345</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Teléfono</p>
                            <p class="text-slate-500 text-sm mt-0.5">+1 234 567 8900</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Correo Electrónico</p>
                            <p class="text-slate-500 text-sm mt-0.5">info@vetcare.com<br>emergencias@vetcare.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-teal-50 rounded-xl flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Horarios de Atención</p>
                            <p class="text-slate-500 text-sm mt-0.5">Lunes a Viernes: 8:00 AM - 6:00 PM<br>Sábados: 8:00 AM - 2:00 PM<br>Emergencias: 24/7</p>
                        </div>
                    </div>
                </div>

                {{-- CTA Urgencias --}}
                <div class="mt-8 bg-gradient-to-r from-blue-500 to-teal-400 rounded-2xl p-6 text-white">
                    <h3 class="font-bold text-lg mb-1">¿Necesitas Ayuda Inmediata?</h3>
                    <p class="text-blue-100 text-sm mb-4">Para emergencias, estamos disponibles las 24 horas del día.</p>
                    <a href="tel:+12345678900"
                       class="inline-flex items-center gap-2 bg-white text-teal-600 hover:bg-teal-50 font-semibold px-5 py-2.5 rounded-lg transition-colors text-sm">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        Llamar Ahora
                    </a>
                </div>
            </div>

            {{-- Map Placeholder --}}
            <div class="rounded-2xl overflow-hidden border border-slate-100 shadow-sm h-96 lg:h-auto bg-slate-100">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1!2d-99.1332!3d19.4326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTnCsDI1JzU3LjQiTiA5OcKwMDcnNTkuNSJX!5e0!3m2!1ses!2smx!4v1234567890"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" class="w-full h-full min-h-80">
                </iframe>
            </div>
        </div>
    </div>
</section>

{{-- Contact Form --}}
<section class="py-16 bg-slate-50">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <h2 class="text-2xl font-bold text-slate-800 text-center mb-6">Envíanos un Mensaje</h2>
            <form action="#" method="POST" class="space-y-5">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Nombre Completo <span class="text-red-500">*</span></label>
                        <input type="text" name="nombre" placeholder="Juan Pérez"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Correo Electrónico <span class="text-red-500">*</span></label>
                        <input type="email" name="email" placeholder="tu@email.com"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Teléfono <span class="text-red-500">*</span></label>
                        <input type="tel" name="telefono" placeholder="+1 234 567 8900"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Asunto <span class="text-red-500">*</span></label>
                        <select name="asunto"
                                class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent bg-white" required>
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="consulta">Consulta General</option>
                            <option value="cita">Agendar Cita</option>
                            <option value="emergencia">Emergencia</option>
                            <option value="informacion">Información de Servicios</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Mensaje <span class="text-red-500">*</span></label>
                    <textarea name="mensaje" rows="4" placeholder="Escribe tu mensaje aquí..."
                              class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400 resize-none" required></textarea>
                </div>
                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-semibold py-3 rounded-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                    Enviar Mensaje
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
