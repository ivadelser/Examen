<nav>
    <a href="{{ route('libro.create') }}" class="btn btn-primary btn-sm">Nuevo Libro</a>
    <a href="{{ route('libro.index') }}" class="btn btn-primary btn-sm">Listado de Libros</a>
    <a href="{{ route('libro.create') }}" class="btn btn-primary btn-sm">Listado de Socios</a>
    @if(auth()->check())
        <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
        </li>
    @endif
</nav>