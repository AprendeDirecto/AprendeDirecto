<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nosotros - AprendeDirecto</title>

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
            background-image: url('{{ asset("img/fondoS.jpg") }}'); /* Reemplaza 'tu-imagen.jpg' con la ruta de tu imagen de fondo */
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
        .room-buttons button, #customA  {
            margin-bottom: 5px;
            width: 100%; /* Hace que los botones ocupen el 100% del ancho disponible */
        }

    </style>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/home" class="nav-link px-2 text-white pe-5">AprendeDirecto</a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/buscarProfe" class="nav-link px-2 text-white">Buscar Profesores</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="comoFuncionaDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ¿Cómo Funciona?
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="comoFuncionaDropdown">
                            <li><a class="dropdown-item" href="/barProfe">Profesor</a></li>
                            <li><a class="dropdown-item" href="/barEstu">Alumno</a></li>
                        </ul>
                    </li>
                    <li><a href="/nosotros" class="nav-link px-2 text-white ">¿Quiénes Somos?</a></li>
                </ul>
                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2"
                        onclick="window.location='{{ Route('login') }}'">Inicio sesion</button>
                    <button type="button" class="btn btn-warning"
                        onclick="window.location='{{ Route('register') }}'">Registro</button>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container-fluid bg-image">
            <div class="container translucent-bg ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Sección principal con título en un rectángulo -->
                            <div class="section-title">
                                <h2 class="text-center" id="custom">Tus Clases</h2>
                            </div>

                            <!-- Cards de las salas con información y botones -->
                            <div class="card room-card mt-3">
                                <div class="card-body" id="pr">
                                    <!-- Lado Izquierdo (info de la sala) -->
                                    <div class="room-info">
                                        <h5 class="card-title text-center" id="custom1">Sala A</h5>
                                        <p class="card-text">
                                            ID de Sala: 123<br>
                                            Profesor: DIEGO<br>
                                            Materia: FÍSICA<br>
                                            Fecha: 01/01/2023<br>
                                            Hora: 10:00 AM
                                        </p>
                                    </div>

                                    <!-- Lado Derecho (botones) -->
                                    <div class="room-buttons">
                                        <button class="btn btn-primary btn-block mt-5">Ver Profesor</button>
                                        <a class="btn btn-primary btn-block" href="/camara-estu" id="customA" >Ingresar a Sala</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card room-card mt-3">
                                <div class="card-body" id="pr">
                                    <!-- Lado Izquierdo (info de la sala) -->
                                    <div class="room-info">
                                        <h5 class="card-title text-center" id="custom1">Sala B</h5>
                                        <p class="card-text">
                                            ID de Sala: 123<br>
                                            Profesor: JUAN<br>
                                            Materia: BAILE <br>
                                            Fecha: 01/01/2023<br>
                                            Hora: 10:00 AM
                                        </p>
                                    </div>

                                    <!-- Lado Derecho (botones) -->
                                    <div class="room-buttons">
                                        <button class="btn btn-primary btn-block mt-5">Ver Profesor</button>
                                        <a class="btn btn-primary btn-block" href="/camara-estu" id="customA">Ingresar a Sala</a>
                                    </div>
                                </div>
                            </div>


                            <div class="card room-card mt-3">
                                <div class="card-body" id="pr">
                                    <!-- Lado Izquierdo (info de la sala) -->
                                    <div class="room-info">
                                        <h5 class="card-title text-center" id="custom1">Sala C</h5>
                                        <p class="card-text">
                                            ID de Sala: 123<br>
                                            Profesor: JOSE<br>
                                            Materia: MATEMATICAS<br>
                                            Fecha: 01/01/2023<br>
                                            Hora: 10:00 AM
                                        </p>
                                    </div>

                                    <!-- Lado Derecho (botones) -->
                                    <div class="room-buttons">
                                        <button class="btn btn-primary btn-block mt-5">Ver Profesor</button>
                                        <a class="btn btn-primary btn-block" href="/camara-estu" id="customA">Ingresar a Sala</a>
                                    </div>
                                </div>
                            </div>




                            <!-- Puedes agregar más cards según sea necesario -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy;–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
        </p>
    </footer>
</body>

</html>
