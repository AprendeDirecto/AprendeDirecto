@extends('templates.master')
@section('title')
    Perfil estudiante
@endsection
<head>
    <link href="{{ asset('css/perfil-estu.css') }}" rel="stylesheet" type="text/css">
</head>

@section('container')
<!-- Student Profile -->
<div class="student-profile py-4">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent text-center">
              <img class="profile_img" src="{{ asset('img/logo.jpg') }}" alt="">
              <h3>Ana Perez Parra</h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Interés Academico:</strong>Programación</p>
              <p class="mb-0"><strong class="pr-1">Profesor/a preferido</strong>-</p>
              <p class="mb-0"><strong class="pr-1">Frecuencia de actividad:</strong>Activa</p>
            </div>
          </div>
        </div>
        <div class="col-lg-8">
          <div class="card shadow-sm">
            <div class="card-header bg-transparent border-0">
              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Información General</h3>
            </div>
            <div class="card-body pt-0">
              <table class="table table-bordered">
                <tr>
                  <th width="30%">Correo</th>
                  <td width="2%">:</td>
                  <td>Micorreo@mail.com</td>
                </tr>
                <tr>
                  <th width="30%">Edad	</th>
                  <td width="2%">:</td>
                  <td>18</td>
                </tr>
                <tr>
                  <th width="30%">Historial</th>
                  <td width="2%">:</td>
                  <td>Estudiante desde el 5 febrero, 2023</td>
                </tr>
                <tr>
                  <th width="30%">Pais</th>
                  <td width="2%">:</td>
                  <td>Chile</td>
                </tr>
                <tr>
                  <th width="30%">Region</th>
                  <td width="2%">:</td>
                  <td>Metropolitana</td>
                </tr>
              </table>

              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Sobre mí</h3>
              <p class="text-justify">¡Hola! Mi nombre es Ana y soy una apasionada estudiante universitaria que adora explorar el mundo del conocimiento. Actualmente, estoy cursando mi licenciatura en Ciencias de la Computación en la Universidad TechVille. Desde muy joven, me intrigó el mundo de la tecnología y cómo puede transformar nuestras vidas de maneras inimaginables. Mi fascinación por la informática me llevó a sumergirme en el estudio de la programación, el desarrollo web y la inteligencia artificial.</p>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
@endsection
