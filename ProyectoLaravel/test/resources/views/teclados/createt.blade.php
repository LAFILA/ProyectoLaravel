@extends ('layout')

@section('titlte',"Crear Teclado")

@section('content')

        <div class="card mt-4">
                <h4 class="card-header">Crear Teclado</h4>
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

                        <form method="POST" action="{{ url('teclados') }}">
                        {{ csrf_field() }}
    
                        <div class="form-group">
                                <label for="name">Nombre:</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                        
                        <div class="form-group">
                                <label for="idioma">Idioma:</label>
                                <input type="text" class="form-control" name="idioma" value="{{ old('idioma') }}">
                        </div>

                        <div class="form-group">
                                <label for="tamano">Tamaño:</label>
                                <input type="text" class="form-control" name="tamano" value="{{ old('tamano') }}">
                        </div>

                        <div class="form-group">
                                <label for="tipo">Tipo:</label>
                                <input type="text" class="form-control" name="tipo" value="{{ old('tipo') }}">
                        </div>

                        <div class="form-group">
                                <label for="cherry">Cherry:</label>
                                <input type="text" class="form-control" name="cherry" value="{{ old('cherry') }}">
                        </div>
                
                        <button type="submit" class="btn btn-primary">Crear teclado</button>
                        <a href="{{ route('teclados.index') }}">Regresar al listado de teclados</a>
                        </form>
                </div>
        </div>
        <h1>Crear Teclado</h1>

        
@endsection