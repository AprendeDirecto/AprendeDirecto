<?php
  if (!isset($_SESSION)) {
    session_start();
    // dd($_SESSION,"Estamos aqui");
  }
  if (!isset($_SESSION['UsuarioOBJ'])) {
    header('Location: /home');
    exit();
  }elseif ($_SESSION['UsuarioOBJ']->tipoUsuario != 'alumno') {
    header('Location: /');
    exit();
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USUARIO - AprendeDirecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/CLASES-YA-ICONO.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div id="meet"></div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://meet.jit.si/external_api.js"></script>
    <script src="js/user.js"></script>
  </body>
</html>
