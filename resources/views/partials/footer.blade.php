<footer class="bg-slate-50 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            {{-- Brand --}}
            <div>
                <a href="{{ route('home') }}" class="flex items-center gap-2 mb-3">
                    <img src="{{ asset('img/logo.png') }}" alt="VetCare" class="h-9 w-auto">
                </a>
                <p class="text-slate-500 text-sm leading-relaxed">
                    Cuidando la salud de tu mejor amigo con profesionalismo y dedicación.
                </p>
            </div>

            {{-- Quick links --}}
            <div>
                <h4 class="font-semibold text-slate-800 mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-slate-500 hover:text-teal-600 text-sm transition-colors">Inicio</a></li>
                    <li><a href="{{ route('veterinarios') }}" class="text-slate-500 hover:text-teal-600 text-sm transition-colors">Veterinarios</a></li>
                    <li><a href="{{ route('recomendaciones') }}" class="text-slate-500 hover:text-teal-600 text-sm transition-colors">Recomendaciones</a></li>
                    <li><a href="{{ route('contacto') }}" class="text-slate-500 hover:text-teal-600 text-sm transition-colors">Contacto</a></li>
                </ul>
            </div>

            {{-- Contact info --}}
            <div>
                <h4 class="font-semibold text-slate-800 mb-4">Contacto</h4>
                <ul class="space-y-2">
                    <li class="flex items-start gap-2 text-sm text-slate-500">
                        <svg class="w-4 h-4 mt-0.5 text-teal-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        Av. Principal 123, Ciudad
                    </li>
                    <li class="flex items-center gap-2 text-sm text-slate-500">
                        <svg class="w-4 h-4 text-teal-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                        +1 234 567 8900
                    </li>
                    <li class="flex items-center gap-2 text-sm text-slate-500">
                        <svg class="w-4 h-4 text-teal-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        info@vetcare.com
                    </li>
                </ul>
            </div>

            {{-- Social --}}
            <div>
                <h4 class="font-semibold text-slate-800 mb-4">Síguenos</h4>
                <div class="flex items-center gap-3">
                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-slate-200 hover:border-teal-400 hover:bg-teal-50 transition-colors">
                        <img src="{{ asset('img/icono_facebook.svg') }}" alt="Facebook" class="w-5 h-5">
                    </a>
                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-slate-200 hover:border-teal-400 hover:bg-teal-50 transition-colors">
                        <img src="{{ asset('img/icono_instagram.png') }}" alt="Instagram" class="w-5 h-5">
                    </a>
                    <a href="#" class="w-9 h-9 flex items-center justify-center rounded-full bg-white border border-slate-200 hover:border-teal-400 hover:bg-teal-50 transition-colors">
                        <img src="{{ asset('img/icono_twitter.png') }}" alt="Twitter" class="w-5 h-5">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 text-center">
            <p class="text-slate-400 text-sm">© 2026 VetCare. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
