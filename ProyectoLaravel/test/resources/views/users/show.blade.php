@extends ('layout')

@section('titlte',"Usuario {$user->id}")

@section('content')

        <h1>Usuario #{{ $user->id }}</h1>

        <p>Nombre del usuario: {{ $user->name }}</p>
        <p>Correo electronico: {{ $user->email }}</p>

@endsection