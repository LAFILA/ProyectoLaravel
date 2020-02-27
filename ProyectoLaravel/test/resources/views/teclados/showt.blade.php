@extends ('layout')

@section('titlte',"Teclado {$teclado->id}")

@section('content')

        <h1>Teclado #{{ $teclado->id }}</h1>

        <p>Nombre del teclado: {{ $teclado->name }}</p>
        <p>Idioma de teclado: {{ $teclado->idioma }}</p>
        <p>Tamaño de teclado: {{ $teclado->tamano }}</p>
        <p>Tipo de teclado: {{ $teclado->tipo }}</p>
        <p>Cherry de teclado: {{ $teclado->cherry }}</p>

        <p>
                <a href="{{ route('teclados.index') }}">Regresar al listado de teclados</a>
        </p>

@endsection
<td>{{ $teclado->name }}</td>
            <td>{{ $teclado->idioma }}</td>
            <td>{{ $teclado->tamano }}</td>
            <td>{{ $teclado->tipo }}</td>
            <td>{{ $teclado->cherry }}</td>