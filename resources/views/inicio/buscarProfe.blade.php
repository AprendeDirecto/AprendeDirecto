<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AprendeDirecto</title>

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

         /* Aumenta el margen del cuerpo para centrar el contenido */


    /* Establece un máximo de ancho para evitar que el contenido se estire demasiado */
    .container-fluid {
      max-width: 1200px;
    }

    /* Estilo para la columna de filtro */
    .filter-column {
        color: white;
      background-color: #010101; /* Color de fondo del menú de filtro */
      border: 1px solid #dee2e6; /* Borde para separar la columna del contenido principal */
      padding: 15px; /* Añade un relleno al menú de filtro */
    }

    /* Estilo para el contenido principal */
    .main-content {
      background-color: #ffffff; /* Color de fondo del contenido principal */
      border: 1px solid #dee2e6; /* Borde para separar el contenido del menú de filtro */
      padding: 15px; /* Añade un relleno al contenido principal */
    }

    .product-image {
      width: 100px; /* Ajusta el ancho según tus necesidades */
      height: auto; /* Ajusta la altura automáticamente */
      margin-right: 15px; /* Espaciado entre la imagen y el texto */
    }
    </style>
</head>

<body>
    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/home" class="nav-link px-2 text-white pe-5">AprendeDirecto</a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="/buscarProfe" class="nav-link px-2 text-warning">Buscar Profesores</a></li>
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
                    <li><a href="/nosotros" class="nav-link px-2 text-white">¿Quiénes Somos?</a></li>
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
        <div class="container-fluid mt-3">
            <div class="row">
              <div class="col-md-3 filter-column">
                <!-- Columna de filtro (Menú de productos) -->
                <h4>Filtrar por:</h4>
                <!-- Agrega tus opciones de filtrado aquí -->
                <ul>
                    <li>Matemáticas</li>
                    <li>Ciencias Naturales</li>
                    <li>Lengua y Literatura</li>
                    <li>Historia</li>
                    <li>Geografía</li>
                    <li>Arte</li>
                    <li>Educación Física</li>
                    <li>Programación</li>
                    <li>Inglés</li>
                  <!-- Agrega más opciones según sea necesario -->
                </ul>
              </div>
              <div class="col-md-9 main-content">
                <!-- Contenido principal -->
                <div class="card product-card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card product-card mt-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card product-card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card product-card mt-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="card product-card">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="card product-card mt-3">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-4">
                          <!-- Imagen a la izquierda del card -->
                          <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                        </div>
                        <div class="col-md-8">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">Profesor</h5>
                          <p class="card-text">Descripción del Profesor. Puedes agregar más detalles aquí.</p>
                          <!-- Puedes agregar más contenido según sea necesario -->
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- Agrega el contenido principal aquí -->
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
