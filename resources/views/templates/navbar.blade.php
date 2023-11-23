@php
    use App\Http\Controllers\Controller;
@endphp
<!-- navbar with boostrap 4.6 active validation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('index') }}">AprendeDirecto</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            {{-- @dd($_SESSION['UsuarioOBJ']) --}}

            {{-- navbar de PROFESOR --}}
            {{-- {{dd(Controller::isNavItemActive('dasd'))}} --}}
            @if ($_SESSION['UsuarioOBJ']->tipoUsuario == 'profesor')
                <li class='nav-item {{Controller::isNavItemActive('')}}'>
                    <a class='nav-link' href='#'>Publicar clase</a>
                </li>
                <li class='nav-item {{Controller::isNavItemActive('perfil-profe')}}'>
                    <a class='nav-link' href='{{ route('perfil-profe') }}'>Perfil profesor</a>
                </li>
            {{-- navbar de ALUMNO --}}
            @elseif ($_SESSION['UsuarioOBJ']->tipoUsuario == 'alumno')
                <li class='nav-item {{Controller::isNavItemActive('')}}'>
                    <a class='nav-link' href='#'>Buscar clase</a>
                </li>
                <li class='nav-item {{Controller::isNavItemActive('perfil-estu')}}'>
                    <a class='nav-link' href='{{ route('perfil-estu') }}'>Perfil alumno</a>
                </li>
            @endif
        </ul>
        <form class="form-inline" action="/desconectarCuenta" method="GET">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Desconectarse</button>
        </form>
    </div>
</nav>
