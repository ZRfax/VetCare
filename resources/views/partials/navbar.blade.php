<header>
    <nav class="navbar">
        <div class="container navbar-content">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="VetCare">
            </a>

            <ul class="nav-links">
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('servicios') }}">Servicios</a></li>
                <li><a href="{{ route('agendar-cita') }}">Agendar Cita</a></li>
                <li><a href="{{ route('veterinarios') }}">Veterinarios</a></li>
                <li><a href="{{ route('recomendaciones') }}">Recomendaciones</a></li>
                <li><a href="{{ route('testimonios') }}">Testimonios</a></li>
                <li><a href="{{ route('chat') }}">Chat en Vivo</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>

            <a href="{{ route('login') }}" class="btn-login">Iniciar Sesión</a>
        </div>
    </nav>
</header>