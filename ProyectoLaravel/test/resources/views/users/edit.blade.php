@extends('layout')

@section('title', "Actualizar usuario")

@section('content')
<div class="card mt-4">
        <h4 class="card-header">Actualizar Usuario</h4>
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

            <form method="POST" action="{{ url("usuarios/{$user->id}") }}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Pedro Perez" value="{{ old('name', $user->name) }}">
            </div>
                <br>
            <div class="form-group">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="pedro@example.com" value="{{ old('email', $user->email) }}">
            </div>
                <br>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Mayor a 6 caracteres">
            </div>
                <br>
                <button type="submit">Actualizar usuario</button>
                <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
            </form>
        </div>
</div>
@endsection