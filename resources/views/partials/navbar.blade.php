<header class="bg-white shadow-sm sticky top-0 z-50">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2">
                <img src="{{ asset('img/logo.png') }}" alt="VetCare" class="h-9 w-auto">
            </a>

            {{-- Nav links desktop --}}
            <ul class="hidden lg:flex items-center gap-1">
                <li><a href="{{ route('home') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('home') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Inicio</a></li>
                <li><a href="{{ route('servicios') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('servicios') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Servicios</a></li>
                <li><a href="{{ route('agendar-cita') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('agendar-cita') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Agendar Cita</a></li>
                <li><a href="{{ route('veterinarios') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('veterinarios') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Veterinarios</a></li>
                <li><a href="{{ route('recomendaciones') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('recomendaciones') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Recomendaciones</a></li>
                <li><a href="{{ route('testimonios') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('testimonios') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Testimonios</a></li>
                <li><a href="{{ route('chat') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('chat') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Chat en Vivo</a></li>
                <li><a href="{{ route('contacto') }}"
                       class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('contacto') ? 'text-teal-600 bg-teal-50' : 'text-slate-600 hover:text-teal-600 hover:bg-teal-50' }}">Contacto</a></li>
            </ul>

            {{-- Login button --}}
            <a href="{{ route('login') }}"
               class="hidden lg:flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white text-sm font-medium px-5 py-2 rounded-lg transition-colors">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
                Iniciar Sesión
            </a>

            {{-- Mobile hamburger --}}
            <button id="mobile-menu-btn" class="lg:hidden p-2 rounded-md text-slate-600 hover:text-teal-600">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden lg:hidden pb-4 border-t border-slate-100 mt-1">
            <ul class="flex flex-col gap-1 pt-2">
                <li><a href="{{ route('home') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Inicio</a></li>
                <li><a href="{{ route('servicios') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Servicios</a></li>
                <li><a href="{{ route('agendar-cita') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Agendar Cita</a></li>
                <li><a href="{{ route('veterinarios') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Veterinarios</a></li>
                <li><a href="{{ route('recomendaciones') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Recomendaciones</a></li>
                <li><a href="{{ route('testimonios') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Testimonios</a></li>
                <li><a href="{{ route('chat') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Chat en Vivo</a></li>
                <li><a href="{{ route('contacto') }}" class="block px-3 py-2 text-sm font-medium text-slate-600 hover:text-teal-600 hover:bg-teal-50 rounded-md">Contacto</a></li>
                <li class="pt-2">
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-2 bg-blue-900 text-white text-sm font-medium px-5 py-2 rounded-lg">Iniciar Sesión</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
