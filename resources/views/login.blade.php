<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['idUsuario'])) {
    header('Location: /');
    exit();
}

if (isset($usuario)) {
    if ($usuario->username == $request->username) {
        $_SESSION['idUsuario'] = $usuario->id;
        header('Location: /');
        exit();
    }
    $mensaje ='Usuario no encontrado';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>

    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="p-5">
        @if (isset($mensaje))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $mensaje }}</div>
        @endif
        <form action="/confirmarUsuario" method="POST">
            <h1 class="h3 mb-3 fw-normal">Iniciar Sesión</h1>
            <!----------------------     Nombre de usuario    ---------------------------------------------------->
            <div class="form-floating">
                <label for="floatingInput">Nombre de Usuario</label>
                <input type="text" class="form-control" id="floatingInput" name="username"
                    placeholder="juanitoGamer777">
            </div>
            <!--------------------------     Contraseña    -------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingPassword">Contraseña</label>
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password">
            </div>
            <br>
            <!----------------------     Boton de registro    ---------------------------------------------------->
            <div class="checkbox mb-3">
                <label>
                    <a href="/register" class="text-bg-dark">Registrarse</a>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            {{ method_field('GET') }}
        </form>
    </div>
</body>
<footer>
    <script>
      window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove();
        });
      }, 2000);
    </script>
</footer>

</html>
