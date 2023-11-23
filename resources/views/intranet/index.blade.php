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
@extends('templates.master')
@section('title')
    Inicio
@endsection
@section('container')
    @if ($_SESSION['UsuarioOBJ']->tipoUsuario == 'profesor')
        @include('intranet.profesor.salas-profe')
    @elseif($_SESSION['UsuarioOBJ']->tipoUsuario == 'alumno')
        @include('intranet.estudiante.salas-estu')
    @endif
    {{-- @dd($_SESSION['UsuarioOBJ']) --}}
@endsection
