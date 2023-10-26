<!-- navbar with boostrap 4.6 active validation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            @php
                $aux1 = "<li class='nav-item'>
                            <a class='nav-link' href='{{ route('camara-profe') }}'>Sala virtual</a>
                        </li>";
                $aux2 = "<li class='nav-item'> <a class='nav-link' href='{{ route('camara-estu')}}'>Sala virtual</a> </li>";
                if ($_SESSION['UsuarioOBJ']->tipoUsuario = 'profesor') {
                    echo $aux1;
                }elseif ($_SESSION['UsuarioOBJ']->tipoUsuario = 'alumno') {
                    echo $aux2;
                }
            @endphp
            <li class='nav-item'>
                <a class='nav-link' href='{{ route('camara') }}'>Sala virtual (la buena)</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='{{ route('perfil-profe') }}'>Perfil profesor</a>
            </li>
            <li class='nav-item'>
                <a class='nav-link' href='{{ route('perfil-estu') }}'>Perfil alumno</a>
            </li>
            {{--
            <?php $cuentasURL = '/index.php/cuentas'; ?>
            <li class="nav-item d<?php echo active_pagina($cuentasURL); ?>">
                <a class="nav-link" href="{{ route('cuentas') }}">Cuentas <?php echo current_pagina($cuentasURL); ?></a>
            </li>

            <?php $cobrosURL = '/index.php/cobros'; ?>
            <li class="nav-item <?php echo active_pagina($cobrosURL); ?>">
                <a class="nav-link" href="{{ route('cobros') }}">cobros <?php echo current_pagina($cobrosURL); ?></a>
            </li>

            <?php $abonosURL = '/index.php/abonos'; ?>
            <li class="nav-item <?php echo active_pagina($abonosURL); ?>">
                <a class="nav-link" href="{{ route('abonos') }}">abonos <?php echo current_pagina($abonosURL); ?></a>
            </li>

            <li class="nav.item">
                <a class="nav-link" href="{{ route('camara') }}"> Sala</a>
            </li>

            <?php $copiURL = '/index.php/copi'; ?>
            <li class="nav-item <?php echo active_pagina($copiURL); ?>">
                <a class="nav-link" href="{{route('copi')}}">copi <?php echo current_pagina($copiURL); ?></a>
            </li>
            --}}
        </ul>
        <form class="form-inline" action="/desconectarCuenta" method="GET">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Desconectarse</button>
        </form>
    </div>
</nav>
<?php
