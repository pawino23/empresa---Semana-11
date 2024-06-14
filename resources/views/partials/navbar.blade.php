<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">Empresa Pawino</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('servicios') }}">Servicios</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('proyectos') }}">Proyectos</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('clientes') }}">Clientes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('contacto') }}">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('personas.index') }}">Personas</a></li>
        </ul>
    </div>
</nav>