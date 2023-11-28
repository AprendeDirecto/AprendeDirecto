@extends('templates.master')
<?php
    if (!isset($_SESSION)) {
        session_start();
        // dd($_SESSION,"Estamos aqui");
    }
    if (!isset($_SESSION['UsuarioOBJ'])) {
        header('Location: /home');
        exit();
    }elseif ($_SESSION['UsuarioOBJ']->tipoUsuario != 'profesor') {
        header('Location: /');
    exit();
    }
?>
@section('title')
    Publi clase
@endsection
{{-- @inject('materiaController', 'App\Http\Controllers\materiaController;') --}}
@section('container')
    <div class="p-5">
        @if (isset($mensaje))
            <div class="alert alert-success alert-dismissible fade show" role="alert">{{ $mensaje }}</div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            @php
                $mensaje = null;
                foreach ($errors->all() as $msg) {
                    echo $msg."<br>";
                }
            @endphp
            </div>
        @endif
    <form action="{{ route('ctlrPublicacion.store') }}" method="POST">
        <h1 class="h3 mb-3 fw-normal">Crear publicacion</h1>
        <!-----------------------------       Nombre de Publicacion      -------------------------------------------------------------->
        <div class="mb-3">
            <label for="floatingName" class="form-label">Nombre de Publicacion</label>
            <input type="text" class="form-control" id="floatingName" name="nombrePublicacion" value="{{ old('nombrePublicacion') }}"
                placeholder="Clases Java" required>
        </div>
        <!---------------------------------     Descripcion    --------------------------------------------------------------------->
        <div class="mb-3">
            <label for="floatingDesc" class="form-label">Descripcion</label>
            <textarea class="form-control" id="floatingDesc" name="descripcion" rows="3" required>
                {{ old('descripcion') }}
            </textarea>
        </div>
        <!----------------------------------    Select materia   ---------------------------------------------------------------------->
        <div class="mb-3">
            <label for="floatingMateria" class="form-label">Materia</label>
            <br>
            {{-- @dd($listMaterias) --}}
            <select class="form-select" aria-label="Default select example" name="materia_ID">
                <option selected>Abre este menu</option>
                @inject('materiactrl', 'App\Http\Controllers\materiaController')
                @foreach ($materiactrl->index() as $materia)
                    <option value="{{$materia->id}}">{{$materia->nombre}}</option>
                @endforeach
              </select>
        </div>
        <br>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        {{ csrf_field() }}
        {{ method_field('POST') }}
    </form>
@endsection

