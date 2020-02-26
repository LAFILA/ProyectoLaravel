@extends ('layout')

@section('titlte',"Crear usuario")

@section('content')

        <div class="card mt-4">
                <h4 class="card-header">Crear Usuario</h4>
                <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                                <h6>Por favor corrige los errores:</h6>
                                <ul>
                                @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                        </div>
                        @endif

                        <form method="POST" action="{{ url('usuarios') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        
                        <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" class="form-control" name="password">
                        </div>
                
                        <button type="submit" class="btn btn-primary">Crear usuario</button>
                        <a href="{{ route('users.index') }}">Regresar al listado de usuarios</a>
                        </form>
                </div>
        </div>
        <h1>Crear Usuario</h1>

        
@endsection