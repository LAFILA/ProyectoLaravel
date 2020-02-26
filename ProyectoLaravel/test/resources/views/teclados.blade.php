@extends('layout')

@section('title', 'Teclados')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-2 mb-t">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('users.create') }}" class="btn btn-primary">Nuevo usuario</a>
        </p>
    </div>

    @if ($Teclados->isNotEmpty())
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Idioma</th>
            <th scope="col">Tamaño</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cherry</th>
            </tr>
        </thead>
        <tbody>
        @foreach($Teclados as $Teclado)
            <tr>
            <th scope="row">{{ $Teclado->id }}</th>
            <td>{{ $Teclado->name }}</td>
            <td>{{ $Teclado->idioma }}</td>
            <td>{{ $Teclado->tamano }}</td>
            <td>{{ $Teclado->tipo }}</td>
            <td>{{ $Teclado->cherry }}</td>
            <td> 
                <form action="{{ route('Teclados.destroy', $Teclado) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('Teclados.show', $Teclado) }}" class="btn btn-link"><span class="oi oi-eye"></span></a> 
                    <a href="{{ route('Teclados.edit', $Teclado) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay teclados registrados.</p>
    @endif

@endsection

@section('sidebar')
    @parent
@endsection