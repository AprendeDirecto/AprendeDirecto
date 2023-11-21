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
            font-family:'roboto', serif;
            font-size: 20px
        }

        #p{
            font-family:'roboto', serif;
            font-size: 19px
        }

        #customFont{
            font-style: italic;
            font-family: 'Bodoni MT', serif;
        }

        #customFont1{

            font-family: 'Franklin Gothic', serif;

        }

        #customFont2{
            font-family:'roboto', serif;
            border-bottom: 1.5px solid black;
            padding-bottom: 10px;

        }
        #cus{
            border-bottom: 3px solid black;
        }
        #padding-prueba{
            padding-left: 60px;
            padding-right: 60px;
        }

        .img-custom-size {
        width: 500px; /* Elige el ancho que desees */
        height: 400px; /* Elige la altura que desees */
        }
        .bg-image {
        background-image: url('{{ asset("img/alumno.jpg") }}'); /* Reemplaza 'tu-imagen.jpg' con la ruta de tu imagen de fondo */
        background-size: cover;
        background-position: center;
        height: 1000px; /* Ajusta la altura según tus necesidades */
        color: white; /* Cambia el color del texto para que sea legible en la imagen */
        }

        .translucent-bg {
        font-family:'roboto', serif;
        margin-top: 15px;
        background-color: rgba(0, 0, 0, 0.5); /* Fondo negro con opacidad del 70% */
        padding: 20px; /* Añade un relleno para que el contenido no esté pegado al borde */
        color: white; /* Cambia el color del texto para que sea legible en el fondo oscuro */
        }
    </style>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container" >
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a href="/home" class="nav-link px-2 text-white pe-5">AprendeDirecto</a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/buscarProfe" class="nav-link px-2 text-white">Buscar Profesores</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-warning" href="#" id="comoFuncionaDropdown"
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
            <div class="row">
              <div class="col-md-6">
                <!-- Lado Izquierdo con el Párrafo -->

                <div class="translucent-bg">
                    <br>
                    <h2>¿Quieres Aprender en nuestra pagina?</h2>
                    <br>
                    <p>En nuestra plataforma de clases en línea, los estudiantes son el núcleo de la experiencia educativa. Ofrecemos un
                        entorno virtual interactivo que permite a los alumnos participar activamente en su aprendizaje <br><br>
                        Desde la comodidad de sus hogares, los estudiantes tienen acceso a clases en tiempo real, recursos educativos personalizados y mucho más
                        <br><br>
                        Nuestra plataforma facilita la comunicación directa con los profesores, quienes están comprometidos en guiar y apoyar a los estudiantes en su
                        camino de aprendizaje. Con herramientas intuitivas y la flexibilidad de acceder a materiales educativos en cualquier momento, proporcionamos a los estudiantes las herramientas necesarias para alcanzar sus metas académicas de manera eficaz y motivadora.</p>
                        <br>
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
