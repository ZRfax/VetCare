@extends('layouts.app')
@section('title', 'Agendar Cita')

@section('content')

<section class="bg-gradient-to-br from-blue-50 to-teal-50 min-h-screen py-16">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-10">
            <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-slate-800">Agendar Cita</h1>
            <p class="text-slate-500 mt-2">Completa el formulario y nos ponemos en contacto contigo</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <form action="#" method="POST" class="space-y-5">
                @csrf

                {{-- Row 1: Propietario + Mascota --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Nombre del Propietario <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </span>
                            <input type="text" name="propietario" placeholder="Juan Pérez"
                                   class="w-full border border-slate-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Nombre de la Mascota <span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                                <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </span>
                            <input type="text" name="mascota" placeholder="Max"
                                   class="w-full border border-slate-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                        </div>
                    </div>
                </div>

                {{-- Row 2: Especie + Raza --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Especie <span class="text-red-500">*</span>
                        </label>
                        <select name="especie"
                                class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent bg-white" required>
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="perro">Perro</option>
                            <option value="gato">Gato</option>
                            <option value="ave">Ave</option>
                            <option value="reptil">Reptil</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Raza</label>
                        <input type="text" name="raza" placeholder="Labrador"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400">
                    </div>
                </div>

                {{-- Row 3: Servicio + Veterinario --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Servicio Requerido <span class="text-red-500">*</span>
                        </label>
                        <select name="servicio"
                                class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent bg-white" required>
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="consulta_general">Consulta General</option>
                            <option value="vacunacion">Vacunación</option>
                            <option value="desparasitacion">Desparasitación</option>
                            <option value="cirugia">Cirugía</option>
                            <option value="laboratorio">Laboratorio</option>
                            <option value="odontologia">Odontología</option>
                            <option value="urgencias">Urgencias</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">Veterinario</label>
                        <select name="veterinario"
                                class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent bg-white">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="carlos_mendoza">Dr. Carlos Mendoza</option>
                            <option value="ana_garcia">Dra. Ana García</option>
                            <option value="luis_ramirez">Dr. Luis Ramírez</option>
                            <option value="maria_torres">Dra. María Torres</option>
                        </select>
                    </div>
                </div>

                {{-- Row 4: Fecha + Hora --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Fecha <span class="text-red-500">*</span>
                        </label>
                        <input type="date" name="fecha"
                               class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-1">
                            Hora <span class="text-red-500">*</span>
                        </label>
                        <select name="hora"
                                class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent bg-white" required>
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="08:00">08:00 AM</option>
                            <option value="09:00">09:00 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="14:00">02:00 PM</option>
                            <option value="15:00">03:00 PM</option>
                            <option value="16:00">04:00 PM</option>
                            <option value="17:00">05:00 PM</option>
                        </select>
                    </div>
                </div>

                {{-- Notas --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Notas Adicionales</label>
                    <textarea name="notas" rows="3" placeholder="Describe brevemente el motivo de la consulta..."
                              class="w-full border border-slate-200 rounded-lg px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400 resize-none"></textarea>
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-semibold py-3 rounded-lg transition-all flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    Confirmar Cita
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
