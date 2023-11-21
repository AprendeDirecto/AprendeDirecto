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
              {{-- @dd($_SESSION) --}}
              <h3>{{$_SESSION['UsuarioOBJ']->Nombre.' '.$_SESSION['UsuarioOBJ']->primerApellido.' '.$_SESSION['UsuarioOBJ']->segundoApellido}}</h3>
            </div>
            <div class="card-body">
              <p class="mb-0"><strong class="pr-1">Nombre de usuario:</strong>{{$_SESSION['UsuarioOBJ']->username}}</p>
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
                  <td>{{$_SESSION['UsuarioOBJ']->correo}}</td>
                </tr>
                <tr>
                  <th width="30%">RUT</th>
                  <td width="2%">:</td>
                  <td>
                    @php $r=$_SESSION['UsuarioOBJ']->RUT; echo substr($r,0,2).'.'.substr($r,2,3).'.'.substr($r,5,3).'-'.$_SESSION['UsuarioOBJ']->digVer @endphp
                  </td>
                </tr>
                <tr>
                  <th width="30%">Historial</th>
                  <td width="2%">:</td>
                  <td>{{'Estudiante desde el '.DateTime::createFromFormat('Y-m-d H:i:s',$_SESSION['UsuarioOBJ']->created_at)->format("j \d\\e F \d\\e\l Y")}}</td>
                </tr>
                <tr>
                  <th width="30%">Tipo de usuario</th>
                  <td width="2%">:</td>
                  <td>{{$_SESSION['UsuarioOBJ']->tipoUsuario}}</td>
                </tr>
              </table>

              <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Sobre mí</h3>
              <p class="text-justify">
                @if (is_null($_SESSION['UsuarioOBJ']->descripcion) || $_SESSION['UsuarioOBJ']->descripcion == "")
                  Aun no tienes una descripcion, animate a hacer una clickeando en actualizar perfil.
                @else
                  {{$_SESSION['UsuarioOBJ']->descripcion}}
                @endif
              </p>
            </div>
          </div>
        </div>




      </div>
    </div>
  </div>
@endsection
