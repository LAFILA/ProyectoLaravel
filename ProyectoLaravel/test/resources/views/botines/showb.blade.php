@extends ('layout')

@section('titlte',"Botin {$botin->id}")

@section('content')

        <h1>Botin #{{ $botin->id }}</h1>

        <p>Nombre del botin: {{ $botin->name }}</p>
        <p>Marca de botin: {{ $botin->marca }}</p>
        <p>Genero de botin: {{ $botin->genero }}</p>
        <p>Tipo de botin: {{ $botin->tipo }}</p>
        <p>Modalidad de botin: {{ $botin->modalidad }}</p>

        <p>
                <a href="{{ route('botines.index') }}">Regresar al listado de botines</a>
        </p>

@endsection