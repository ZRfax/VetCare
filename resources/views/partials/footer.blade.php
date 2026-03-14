<footer class="footer">
    <div class="container footer-grid">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="VetCare" class="footer-logo">
            <p>Cuidando la salud de tu mejor amigo con profesionalismo y dedicación.</p>
        </div>

        <div>
            <h4>Enlaces Rápidos</h4>
            <ul>
                <li><a href="{{ route('home') }}">Inicio</a></li>
                <li><a href="{{ route('veterinarios') }}">Veterinarios</a></li>
                <li><a href="{{ route('recomendaciones') }}">Recomendaciones</a></li>
                <li><a href="{{ route('contacto') }}">Contacto</a></li>
            </ul>
        </div>

        <div>
            <h4>Contacto</h4>
            <p>Av. Principal 123, Ciudad</p>
            <p>+1 234 567 8900</p>
            <p>info@vetcare.com</p>
        </div>

        <div>
            <h4>Síguenos</h4>
            <div class="social-icons">
                <img src="{{ asset('img/icono_facebook.svg') }}" alt="Facebook">
                <img src="{{ asset('img/icono_instagram.png') }}" alt="Instagram">
                <img src="{{ asset('img/icono_twitter.png') }}" alt="Twitter">
            </div>
        </div>
    </div>

    <div class="footer-copy">
        <p>© 2026 VetCare. Todos los derechos reservados.</p>
    </div>
</footer>