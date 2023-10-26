<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    </style>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <span class="pe-5">AprendeDirecto</span>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-white">Buscar Profesores</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="comoFuncionaDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ¿Cómo Funciona?
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="comoFuncionaDropdown">
                            <li><a class="dropdown-item" href="#">Profesor</a></li>
                            <li><a class="dropdown-item" href="#">Alumno</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="nav-link px-2 text-white">¿Quiénes Somos?</a></li>
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

        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/caro1.jpg') }}" class=" w-100 carousel-image" alt="Image 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/caro2.jpg') }}" class=" w-100 carousel-image" alt="Image 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/caro3.jpg') }}" class=" w-100 carousel-image" alt="Image 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
        ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row p t-1">
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center" id="custom">
                    <img src="{{ asset('img/hom1.jpg') }}" class="bd-placeholder-img rounded-circle" alt="Imagen"
                        width="200" height="200">
                    <h2 class="fw-normal pt-3">Clases Online</h2>
                    <p class="text-justify">Aprende Directo es tu destino para clases online, proporcionándote la
                        comodidad de aprender desde la comodidad de tu hogar.</p>

                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center" id="custom">
                    <img src="{{ asset('img/hom2.jpg') }}" class="bd-placeholder-img rounded-circle" alt="Imagen"
                        width="200" height="200">
                    <h2 class="fw-normal  pt-3">Únetenos</h2>
                    <p class="text-justify">¿Tienes conocimientos que deseas compartir? En Aprende Directo, también
                        puedes convertirte en profesor y ofrecer tus servicios.
                        te damos la bienvenida a unirse a
                        nuestra comunidad educativa.</p>

                </div>
                <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center" id="custom">
                    <img src="{{ asset('img/hom3.jpg') }}" class="bd-placeholder-img rounded-circle" alt="Imagen"
                        width="200" height="200">
                    <h2 class="fw-normal  pt-3">Calidad</h2>
                    <p class="text-justify">Nos enorgullecemos de ofrecer un servicio educativo integral que va más allá
                        de las clases regulares.
                        Nos esforzamos por crear una comunidad donde la calidad de la enseñanza es reconocida y
                        apreciada.</p>

                </div>
            </div><!-- /.row -->
    </main>
    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2023 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a>
        </p>
    </footer>
</body>

</html>
