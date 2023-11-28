@extends('templates.master')
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
@section('title')
    Buscar Clases
@endsection
<head>
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
@section('container')
  @inject('listPublic', 'App\Http\Controllers\publicacionController')
  {{-- @dd($listPublic->index()) --}}
  <main>
      <div class="container-fluid mt-3">
          <div class="row">
            <div class="col-md-9 main-content">
              @foreach ($listPublic->index() as $publicacion)
                <!-- Contenido principal -->
                <div class="card product-card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <!-- Imagen a la izquierda del card -->
                        <img src="{{ asset('img/perfil.jpg') }}" alt="" class="product-image">
                      </div>
                      <div class="col-md-8">
                        <form action="" method="get">
                          <!-- Descripción a la derecha del card -->
                          <h5 class="card-title">{{$publicacion->nombrePublicacion}}</h5>
                          <p class="card-text">Descripción: {{$publicacion->descripcion}}</p>
                          <p class="card-text">Materia: {{$publicacion->nombremateria}}</p>
                          <p class="card-text">Nombre Profesor: {{$publicacion->nombre}}</p>
                          <p class="card-text">Nombre Usuario Profesor: {{$publicacion->username}}</p>
                          <input type="hidden" value="{{$publicacion->id}}" name="publicacionID">
                          <button type="submit" class="w-100 btn btn-lg btn-primary">Crear Sala</button>
                          <!-- Puedes agregar más contenido según sea necesario -->
                          {{ csrf_field() }}
                          {{ method_field('POST') }}
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
          </div>
        </div>
      </div>
  </main>
@endsection

</html>
