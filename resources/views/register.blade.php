<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION['UsuarioOBJ'])) {
    header('Location: /');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="p-5">
        @if (isset($mensaje))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $mensaje }}</div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            @php
                $mensaje = null;
                foreach ($errors->all() as $msg) {
                    echo $msg."<br>";
                }
            @endphp
            </div>
        @endif
        <form action="{{ route('ctlrUsuarios.store') }}" method="POST">
            <h1 class="h3 mb-3 fw-normal">Registrarse</h1>

            <!-----------------------------       Nombre de Usuario      -------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingInput">Nombre de Usuario</label>
                <input type="text" class="form-control" id="floatingInput" name="username"
                    placeholder="juanitoGamer777" required>
            </div>
            <!---------------------------------     Contraseña    --------------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingPassword">Contraseña</label>
                <input type="password" class="form-control" id="floatingPassword" name="password"
                    placeholder="Password" required>
            </div>
            <!-----------------------------------     E-mail     ---------------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingEmail">E-mail</label>
                <input type="email" class="form-control" id="floatingEmail" name="correo"
                    placeholder="correo@Correo.correo" required>
            </div>
            <!------------------------------------      RUT     ---------------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingRUT">RUT</label>
                <input type="text" class="form-control" id="floatingRUT" name="RUT"
                    placeholder="12.345.678-k" required>
            </div>
            <!----------------------------------       Nombre   ---------------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingNombre">Nombre</label>
                <input type="text" class="form-control" id="floatingNombre" name="Nombre"
                    placeholder="Juan" required>
            </div>
            <!--------------------------------     Primer apellido     -------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingPriApellido">Primer apellido</label>
                <input type="text" class="form-control" id="floatingPriApellido" name="primerApellido"
                    placeholder="Rojas" required>
            </div>
            <!---------------------------------    Segundo apellido    -------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingSegApellido">Segundo apellido</label>
                <input type="text" class="form-control" id="floatingSegApellido" name="segundoApellido"
                    placeholder="Salas">
            </div>
            <!-------------------------------------     ROL     --------------------------------------------------------------------->
            <div class="form-floating">
                <label for="floatingSegApellido">¿Con que rol se quiere registrar?</label><br>
                <input type="radio" id="profe" name="tipoUsuario" value="profesor">
                <label for="profe">Profesor</label><br>
                <input type="radio" id="alum" name="tipoUsuario" value="alumno" @checked(true)>
                <label for="alum">Alumno</label><br>
            </div>
            <br>
            <div class="checkbox mb-3">
                <label>
                    <a href="/login" class="text-bg-dark">Iniciar sesion</a>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
            {{ csrf_field() }}
            {{ method_field('POST') }}
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
