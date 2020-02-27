@extends('layout')

@section('title', "Actualizar botin")

@section('content')
<div class="card mt-4">
        <h4 class="card-header">Actualizar Botin</h4>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ url("botines/{$botin->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Total 90" value="{{ old('name', $botin->name) }}">
            </div>
                <br>
            <div class="form-group">
                <label for="marca">Marca:</label>
                <input type="text" class="form-control" name="marca" id="marca" placeholder="Nike" value="{{ old('marca', $botin->email) }}">
            </div>
                <br>
            <div class="form-group">
                <label for="genero">Genero:</label>
                <input type="text" class="form-control" name="genero" id="genero" placeholder="Masculino">
            </div>
            <br>
            <div class="form-group">
                <label for="tipo">Tipo:</label>
                <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Deportivas">
            </div>
            <br>
            <div class="form-group">
                <label for="modalidad">Modalidad:</label>
                <input type="text" class="form-control" name="modalidad" id="modalidad" placeholder="Futbol">
            </div>
                <br>
                <button type="submit">Actualizar Botin</button>
                <a href="{{ route('botines.index') }}">Regresar al listado de botines</a>
            </form>
        </div>
</div>
@endsection