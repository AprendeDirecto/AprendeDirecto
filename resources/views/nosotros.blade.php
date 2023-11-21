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
            font-size: 22px
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
    </style>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container" >
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a href="/" class="nav-link px-2 text-white pe-5">AprendeDirecto</a>

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
                    <li><a href="/nosotros" class="nav-link px-2 text-warning ">¿Quiénes Somos?</a></li>
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
        <div class="container mt-3 text-center">

        </div>


        <div class="container mb-3 " >
            <h1 class="fw-bold text-center" id="customFont1">APRENDE DIRECTO</h1>

            <h3 class="text-justify text-center mb-3" id="customFont">"Tu camino hacia el aprendizaje personalizado y de calidad"</h3>

        </div>

          <div class="container pt-3">
            <div class="row">
              <div class="col-md-6">
                <!-- Lado Izquierdo con la Imagen -->
                <h1 id="customFont2" class="text-center">¿Que es AprendeDirecto?</h1>
                <br>
                <p>
                    "AprendeDirecto" es la plataforma líder en aprendizaje personalizado que conecta a estudiantes con profesores expertos en una amplia gama de disciplinas.
                     Nuestra aplicación te ofrece la flexibilidad para aprender lo que quieras, cuándo quieras, y la confianza de que recibirás una educación de alta calidad. Con "AprendeDirecto", el aprendizaje se adapta a tu estilo de vida.
                </p>

              </div>
              <div class="col-md-6">
                <!-- Lado Derecho con el Párrafo -->
                <img src="{{ asset('img/nosotros.jpg') }}" alt="Descripción de la imagen" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="container mt-3" id="cus"></div>
          <br> <br>


          <div class="container pt-3">
            <div class="row">
              <div class="col-md-6" >
                <!-- Lado Izquierdo con la Imagen -->
                <h1 id="customFont2" class="text-center text-success">Características Clave</h1>
                <br>



              </div>
              <div class="col-md-6">
                <!-- Lado Derecho con el Párrafo -->
                <h1 id="customFont2" class="text-center text-info">Beneficios para Usuarios
                </h1>
                <br>


              </div>
            </div>
          </div>

          <div class="container pt-3">
            <div class="row">
              <div class="col-md-6" id="padding-prueba">
                <!-- Lado Izquierdo con la Imagen -->


                <p id="p"><span class="fw-bold text-success">Clases Particulares en Línea:</span> <br> Accede a clases particulares en línea con profesores expertos desde la comodidad de tu hogar.
                </p>

                <p id="p"><span class="fw-bold text-success">Variedad de temas:</span> <br>Explora una amplia variedad de temas, desde matemáticas e idiomas hasta música y ciencias.
                </p>

                <p id="p"><span class="fw-bold text-success">Flexibilidad Horaria:</span> <br>Aprende a tu ritmo con horarios flexibles que se adaptan a tu agenda individual.
                </p>

                <p id="p"><span class="fw-bold text-success">Comunicación Eficiente:</span><br> Facilita una comunicación fluida con tus profesores a través de nuestro chat integrado.
                </p>

                <p id="p"><span class="fw-bold text-success">Evaluación y Retroalimentación:</span> <br>Proporciona comentarios honestos y evalúa a tus profesores después de cada clase.</p>


              </div>
              <div class="col-md-6"  id="padding-prueba">
                <!-- Lado Derecho con el Párrafo -->


                <p id="p"><span class="fw-bold text-info">Aprendizaje Personalizado:</span> <br>  Diseña tu propio camino de aprendizaje y adquiere conocimientos específicos que te interesen.
                </p>

                <p id="p"><span class="fw-bold text-info">Elección Informada:</span> <br> Explora perfiles de profesores y selecciona a los educadores que mejor se adapten a tus necesidades.
                </p>

                <p id="p"><span class="fw-bold text-info">Horarios Flexibles:</span> <br>Ajusta tus clases a tu agenda personal para un aprendizaje conveniente.

                </p>

                <p id="p"><span class="fw-bold text-info">Comunicación Efectiva: </span><br>  Establece sesiones de clases de manera sencilla y mantén una comunicación fluida con tus profesores.

                </p>

                <p id="p"><span class="fw-bold text-info">Calidad Garantizada:</span> <br> Confía en profesores de alta calidad, respaldados por calificaciones y reseñas de estudiantes reales.

                </p>

              </div>
            </div>
          </div>

          <div class="container pt-3">
            <div class="row">
              <div class="col-md-6 text-center" >
                <!-- Lado Izquierdo con la Imagen -->
                <img src="{{ asset('img/n1.jpg') }}" alt="Descripción de la imagen" class="img-fluid img-custom-size">
                <br>



              </div>
              <div class="col-md-6 text-center" >
                <!-- Lado Derecho con el Párrafo -->
                <img src="{{ asset('img/n3.jpg') }}" alt="Descripción de la imagen" class="img-fluid img-custom-size">
                <br>


              </div>
            </div>
          </div>

        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->


    </main>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy;–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
        </p>
    </footer>
</body>

</html>
