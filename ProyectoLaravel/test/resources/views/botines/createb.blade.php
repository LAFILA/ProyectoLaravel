@extends ('layout')

@section('titlte',"Crear botin")

@section('content')

        <div class="card mt-4">
                <h4 class="card-header">Crear Botin</h4>
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

                        <form method="POST" action="{{ url('botines') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        
                        <div class="form-group">
                                <label for="email">Marca:</label>
                                <input type="text" class="form-control" name="marca" value="{{ old('marca') }}">
                        </div>

                        <div class="form-group">
                                <label for="genero">Genero:</label>
                                <input type="text" class="form-control" name="genero" value="{{ old('genero') }}">
                        </div>

                        <div class="form-group">
                                <label for="tipo">Tipo:</label>
                                <input type="text" class="form-control" name="tipo" value="{{ old('tipo') }}">
                        </div>

                        <div class="form-group">
                                <label for="modalidad">Modalidad:</label>
                                <input type="text" class="form-control" name="modalidad" value="{{ old('modalidad') }}">
                        </div>
                
                        <button type="submit" class="btn btn-primary">Crear botin</button>
                        <a href="{{ route('botines.index') }}">Regresar al listado de botines</a>
                        </form>
                </div>
        </div>
        <h1>Crear Botin</h1>

        
@endsection