@extends('layouts.app')
@section('title', 'Chat en Vivo')

@section('content')

<section class="bg-gradient-to-br from-blue-50 to-teal-50 min-h-screen py-16">
    <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header --}}
        <div class="text-center mb-8">
            <div class="w-14 h-14 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </div>
            <h1 class="text-3xl font-bold text-slate-800">Chat en Vivo</h1>
            <p class="text-slate-500 mt-2">Estamos aquí para ayudarte con cualquier consulta</p>
        </div>

        {{-- Chat Box --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">

            {{-- Chat Header --}}
            <div class="bg-gradient-to-r from-blue-500 to-teal-400 px-5 py-4 flex items-center gap-3">
                <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/>
                    </svg>
                </div>
                <div>
                    <p class="text-white font-semibold text-sm">Asistente VetCare</p>
                    <div class="flex items-center gap-1.5">
                        <span class="w-2 h-2 bg-green-300 rounded-full"></span>
                        <span class="text-white/80 text-xs">En línea</span>
                    </div>
                </div>
            </div>

            {{-- Messages --}}
            <div id="chat-messages" class="p-5 h-80 overflow-y-auto space-y-4 bg-slate-50">
                {{-- Bot message --}}
                <div class="flex items-start gap-3">
                    <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center shrink-0">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/>
                        </svg>
                    </div>
                    <div>
                        <div class="bg-white rounded-2xl rounded-tl-sm px-4 py-3 shadow-xs border border-slate-100 max-w-xs">
                            <p class="text-slate-700 text-sm">¡Hola! Bienvenido a VetCare. ¿En qué podemos ayudarte hoy?</p>
                        </div>
                        <p class="text-slate-400 text-xs mt-1 ml-1">23:49</p>
                    </div>
                </div>
            </div>

            {{-- Quick Replies --}}
            <div class="px-5 py-3 border-t border-slate-100 flex flex-wrap gap-2">
                <button onclick="sendQuickReply('¿Cuáles son los horarios?')"
                        class="text-xs border border-slate-200 text-slate-600 hover:border-teal-400 hover:text-teal-600 px-3 py-1.5 rounded-full transition-colors">
                    Horarios
                </button>
                <button onclick="sendQuickReply('Quiero agendar una cita')"
                        class="text-xs border border-slate-200 text-slate-600 hover:border-teal-400 hover:text-teal-600 px-3 py-1.5 rounded-full transition-colors">
                    Agendar Cita
                </button>
                <button onclick="sendQuickReply('Información sobre vacunación')"
                        class="text-xs border border-slate-200 text-slate-600 hover:border-teal-400 hover:text-teal-600 px-3 py-1.5 rounded-full transition-colors">
                    Vacunación
                </button>
                <button onclick="sendQuickReply('¿Cuánto cuesta una consulta?')"
                        class="text-xs border border-slate-200 text-slate-600 hover:border-teal-400 hover:text-teal-600 px-3 py-1.5 rounded-full transition-colors">
                    Precios
                </button>
            </div>

            {{-- Input --}}
            <div class="px-5 py-4 border-t border-slate-100 flex items-center gap-3">
                <input type="text" id="chat-input" placeholder="Escribe tu mensaje..."
                       class="flex-1 border border-slate-200 rounded-full px-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400">
                <button onclick="sendMessage()"
                        class="w-10 h-10 bg-teal-500 hover:bg-teal-600 rounded-full flex items-center justify-center transition-colors shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
const responses = {
    'horarios': 'Nuestros horarios de atención son: Lunes a Viernes de 8:00 AM a 6:00 PM, Sábados de 8:00 AM a 2:00 PM. Para emergencias estamos disponibles las 24 horas.',
    'cita': 'Puedes agendar tu cita directamente desde nuestra página web en la sección "Agendar Cita" o llamándonos al +1 234 567 8900.',
    'vacunación': 'Contamos con el esquema completo de vacunación para perros y gatos. Incluye todas las vacunas esenciales con recordatorios automáticos.',
    'precio': 'Los precios varían según el servicio. La consulta general comienza desde $25. Contáctanos para más detalles.',
    'default': 'Gracias por tu mensaje. Un miembro de nuestro equipo te responderá en breve. También puedes llamarnos al +1 234 567 8900.',
};

function getTime() {
    return new Date().toLocaleTimeString('es-ES', { hour: '2-digit', minute: '2-digit' });
}

function appendMessage(text, isUser) {
    const container = document.getElementById('chat-messages');
    const msg = document.createElement('div');
    msg.className = isUser ? 'flex items-start gap-3 justify-end' : 'flex items-start gap-3';

    if (isUser) {
        msg.innerHTML = `
            <div>
                <div class="bg-teal-500 rounded-2xl rounded-tr-sm px-4 py-3 max-w-xs">
                    <p class="text-white text-sm">${text}</p>
                </div>
                <p class="text-slate-400 text-xs mt-1 text-right mr-1">${getTime()}</p>
            </div>
            <div class="w-8 h-8 bg-slate-200 rounded-full flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </div>`;
    } else {
        msg.innerHTML = `
            <div class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center shrink-0">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17H3a2 2 0 01-2-2V5a2 2 0 012-2h14a2 2 0 012 2v10a2 2 0 01-2 2h-2"/>
                </svg>
            </div>
            <div>
                <div class="bg-white rounded-2xl rounded-tl-sm px-4 py-3 shadow-xs border border-slate-100 max-w-xs">
                    <p class="text-slate-700 text-sm">${text}</p>
                </div>
                <p class="text-slate-400 text-xs mt-1 ml-1">${getTime()}</p>
            </div>`;
    }

    container.appendChild(msg);
    container.scrollTop = container.scrollHeight;
}

function getBotResponse(text) {
    const lower = text.toLowerCase();
    if (lower.includes('horario') || lower.includes('hora')) return responses.horarios;
    if (lower.includes('cita') || lower.includes('agendar')) return responses.cita;
    if (lower.includes('vacu')) return responses.vacunación;
    if (lower.includes('precio') || lower.includes('costo') || lower.includes('cuánto')) return responses.precio;
    return responses.default;
}

function sendMessage() {
    const input = document.getElementById('chat-input');
    const text = input.value.trim();
    if (!text) return;
    appendMessage(text, true);
    input.value = '';
    setTimeout(() => appendMessage(getBotResponse(text), false), 800);
}

function sendQuickReply(text) {
    appendMessage(text, true);
    setTimeout(() => appendMessage(getBotResponse(text), false), 800);
}

document.getElementById('chat-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') sendMessage();
});
</script>

@endsection
