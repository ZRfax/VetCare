@extends('layouts.app')
@section('title', 'Iniciar Sesión')

@section('content')

<section class="bg-gradient-to-br from-blue-50 to-teal-50 min-h-screen py-16 flex items-center">
    <div class="max-w-md mx-auto w-full px-4 sm:px-6">

        {{-- Logo + Title --}}
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-teal-500 rounded-full flex items-center justify-center mx-auto mb-4">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-slate-800">Bienvenido a VetCare</h1>
            <p class="text-slate-500 text-sm mt-1">Inicia sesión para acceder a tu cuenta</p>
        </div>

        {{-- Form Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <form action="#" method="POST" class="space-y-4">
                @csrf

                {{-- Email --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Correo Electrónico</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </span>
                        <input type="email" name="email" placeholder="tu@email.com"
                               class="w-full border border-slate-200 rounded-lg pl-9 pr-4 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                    </div>
                </div>

                {{-- Password --}}
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-1">Contraseña</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-3 flex items-center pointer-events-none">
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                            </svg>
                        </span>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                               class="w-full border border-slate-200 rounded-lg pl-9 pr-10 py-2.5 text-sm text-slate-700 focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent placeholder-slate-400" required>
                        <button type="button" onclick="togglePassword()"
                                class="absolute inset-y-0 right-3 flex items-center text-slate-400 hover:text-slate-600">
                            <svg id="eye-icon" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                {{-- Remember + Forgot --}}
                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" name="remember" class="w-4 h-4 rounded border-slate-300 text-teal-500 focus:ring-teal-400">
                        <span class="text-sm text-slate-600">Recordarme</span>
                    </label>
                    <a href="#" class="text-sm text-teal-600 hover:text-teal-700 transition-colors">¿Olvidaste tu contraseña?</a>
                </div>

                {{-- Submit --}}
                <button type="submit"
                        class="w-full bg-gradient-to-r from-blue-500 to-teal-400 hover:from-blue-600 hover:to-teal-500 text-white font-semibold py-3 rounded-lg transition-all">
                    Iniciar Sesión
                </button>
            </form>

            {{-- Divider --}}
            <div class="relative my-6">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-slate-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="px-3 bg-white text-slate-400 text-sm">O continúa con</span>
                </div>
            </div>

            {{-- Social Buttons --}}
            <div class="grid grid-cols-2 gap-3">
                <button class="flex items-center justify-center gap-2 border border-slate-200 hover:bg-slate-50 rounded-lg py-2.5 transition-colors">
                    <img src="{{ asset('img/icono_google.svg') }}" alt="Google" class="w-5 h-5">
                    <span class="text-sm font-medium text-slate-600">Google</span>
                </button>
                <button class="flex items-center justify-center gap-2 border border-slate-200 hover:bg-slate-50 rounded-lg py-2.5 transition-colors">
                    <img src="{{ asset('img/icono_facebook.svg') }}" alt="Facebook" class="w-5 h-5">
                    <span class="text-sm font-medium text-slate-600">Facebook</span>
                </button>
            </div>

            {{-- Register link --}}
            <p class="text-center text-sm text-slate-500 mt-6">
                ¿No tienes una cuenta?
                <a href="{{ route('register') }}" class="text-teal-600 hover:text-teal-700 font-medium transition-colors">Regístrate aquí</a>
            </p>
        </div>

        {{-- Back to home --}}
        <div class="text-center mt-4">
            <a href="{{ route('home') }}" class="text-sm text-slate-400 hover:text-slate-600 transition-colors flex items-center justify-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                </svg>
                Volver al inicio
            </a>
        </div>
    </div>
</section>

<script>
function togglePassword() {
    const input = document.getElementById('password');
    input.type = input.type === 'password' ? 'text' : 'password';
}
</script>

@endsection
