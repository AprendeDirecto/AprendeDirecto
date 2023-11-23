<?php
    if (!isset($_SESSION)) {
        session_start();
        // dd($_SESSION,"Estamos aqui");
    }
    if (!isset($_SESSION['UsuarioOBJ'])) {
        header('Location: /home');
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <script src="{{asset('js/jquery.slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Enlace a la hoja de estilos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Script de Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <!-- Script de Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
    {{-- @dd($_SESSION) --}}
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        .color-container {
            width: 16px;
            height: 16px;
            display: inline-block;
            border-radius: 4px;
        }

        a {
            text-decoration: none;
        }

        p {
            text-align: justify;
            font-family: 'roboto', serif;
            font-size: 20px
        }

        #p {
            font-family: 'roboto', serif;
            font-size: 19px
        }

        #customFont {
            font-style: italic;
            font-family: 'Bodoni MT', serif;
        }

        #customFont1 {
            font-family: 'Franklin Gothic', serif;
        }

        #customFont2 {
            font-family: 'roboto', serif;
            border-bottom: 1.5px solid black;
            padding-bottom: 10px;

        }

        #cus {
            border-bottom: 3px solid black;
        }

        #padding-prueba {
            padding-left: 60px;
            padding-right: 60px;
        }

        .img-custom-size {
            width: 500px; /* Elige el ancho que desees */
            height: 400px; /* Elige la altura que desees */

        }

        .bg-image {
            background-image: url('{{ asset("img/fondoS2.jpg") }}'); /* Reemplaza 'tu-imagen.jpg' con la ruta de tu imagen de fondo */
            background-size: cover;
            background-position: center;
            height: 900px; /* Ajusta la altura según tus necesidades */
            color: white; /* Cambia el color del texto para que sea legible en la imagen */
        }

        .translucent-bg {
            font-family: 'roboto', serif;
            margin-top: 1px;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo negro con opacidad del 70% */
            padding: 20px; /* Añade un relleno para que el contenido no esté pegado al borde */
            color: white; /* Cambia el color del texto para que sea legible en el fondo oscuro */

        }
        #pr{
            font-family: 'roboto', serif;
            background-color: rgba(0, 0, 0, 0.7);
            border: solid black 2px;
            color: white
        }

        #custom {
            border-bottom: solid white 3px;
            padding-bottom: 10px;
        }

        #custom1 {
            border-bottom: solid white 3px;
            padding-bottom: 10px;
            padding-right: 100px;
        }



        #custom-card {
            margin-top: 20px
        }

        .room-info {
            width: 80%;
            float: left;
        }

        /* Estilo para el lado derecho de la card (botones) */
        .room-buttons {
            width: 20%;
            float: right;
            text-align: right;
            padding-top: 10px;
        }

        /* Estilo para los botones dentro del lado derecho */
        .room-buttons button, #customA {
            margin-bottom: 5px;
            width: 100%; /* Hace que los botones ocupen el 100% del ancho disponible */
        }
    </style>
    @include('templates.navbar')
</head>
<body>
    <!-- Message -->
    @if (isset($mensaje))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $mensaje }}</div>
    @endif
    @yield('container')
    {{-- @dd($_SESSION) --}}
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
