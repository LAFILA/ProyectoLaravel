@extends('layout')

@section('title', 'Botines')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-2 mb-t">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('botines.create') }}" class="btn btn-primary">Nuevo Botin</a>
        </p>
    </div>

    @if ($botines->isNotEmpty())
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Marca</th>
            <th scope="col">Genero</th>
            <th scope="col">Tipo</th>
            <th scope="col">Modalidad</th>
            </tr>
        </thead>
        <tbody>
        @foreach($botines as $botin)
            <tr>
            <th scope="row">{{ $botin->id }}</th>
            <td>{{ $botin->name }}</td>
            <td>{{ $botin->marca }}</td>
            <td>{{ $botin->genero }}</td>
            <td>{{ $botin->tipo }}</td>
            <td>{{ $botin->modalidad }}</td>
            <td> 
                <form action="{{ route('botines.destroy', $botin) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('botines.show', $botin) }}" class="btn btn-link"><span class="oi oi-eye"></span></a> 
                    <a href="{{ route('botines.edit', $botin) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
                    <button type="submit" class="btn btn-link"><span class="oi oi-trash"></span></button>
                </form>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay botines registrados.</p>
    @endif

@endsection

@section('sidebar')
    @parent
@endsection