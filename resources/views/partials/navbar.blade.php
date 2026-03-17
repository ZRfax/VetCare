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

            {{-- Auth area desktop --}}
            <div class="hidden lg:flex items-center">
                @auth
                <div class="relative" id="user-dropdown-container">
                    <button id="user-dropdown-btn"
                            class="flex items-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-sm font-medium px-4 py-2 rounded-lg transition-colors"
                            onclick="toggleUserDropdown()">
                        <div class="w-7 h-7 bg-teal-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                            {{ substr(Auth::user()->name, 0, 1) }}
                        </div>
                        <span class="max-w-[120px] truncate">{{ Auth::user()->name }}</span>
                        <svg class="w-4 h-4 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    {{-- Dropdown --}}
                    <div id="user-dropdown"
                         class="hidden absolute right-0 mt-2 w-52 bg-white rounded-xl shadow-lg border border-slate-100 py-2 z-50">
                        <div class="px-4 py-2 border-b border-slate-100">
                            <p class="text-sm font-semibold text-slate-800 truncate">{{ Auth::user()->name }}</p>
                            <p class="text-xs text-slate-400 truncate">{{ Auth::user()->email }}</p>
                            <span class="inline-block mt-1 text-xs px-2 py-0.5 rounded-full
                                @if(Auth::user()->role === 'admin') bg-red-100 text-red-600
                                @elseif(Auth::user()->role === 'veterinario') bg-blue-100 text-blue-600
                                @else bg-teal-100 text-teal-600
                                @endif">
                                {{ ucfirst(Auth::user()->role) }}
                            </span>
                        </div>
                        <div class="py-1">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit"
                                        class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-red-50 hover:text-red-600 transition-colors flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                    </svg>
                                    Cerrar Sesión
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}"
                   class="flex items-center gap-2 bg-blue-900 hover:bg-blue-800 text-white text-sm font-medium px-5 py-2 rounded-lg transition-colors">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                    Iniciar Sesión
                </a>
                @endauth
            </div>

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
                <li class="pt-2 border-t border-slate-100 mt-1">
                    @auth
                    <div class="px-3 py-2">
                        <p class="text-xs text-slate-400 mb-1">Sesión iniciada como:</p>
                        <p class="text-sm font-semibold text-slate-700">{{ Auth::user()->name }}</p>
                        <form method="POST" action="{{ route('logout') }}" class="mt-2">
                            @csrf
                            <button type="submit"
                                    class="inline-flex items-center gap-2 text-sm text-red-500 hover:text-red-600 font-medium transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                                </svg>
                                Cerrar Sesión
                            </button>
                        </form>
                    </div>
                    @else
                    <a href="{{ route('login') }}" class="inline-flex items-center gap-2 bg-blue-900 text-white text-sm font-medium px-5 py-2 rounded-lg">Iniciar Sesión</a>
                    @endauth
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    document.getElementById('mobile-menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });

    function toggleUserDropdown() {
        const dropdown = document.getElementById('user-dropdown');
        dropdown.classList.toggle('hidden');
    }

    // Close dropdown when clicking outside
    document.addEventListener('click', function (event) {
        const container = document.getElementById('user-dropdown-container');
        if (container && !container.contains(event.target)) {
            const dropdown = document.getElementById('user-dropdown');
            if (dropdown) dropdown.classList.add('hidden');
        }
    });
</script>
