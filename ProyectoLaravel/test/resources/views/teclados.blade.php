@extends('layout')

@section('title', 'Teclados')

@section('content')
    <div class="d-flex justify-content-between align-items-end pt-2 mb-t">
        <h1 class="pb-1">{{ $title }}</h1>

        <p>
            <a href="{{ route('teclados.createt') }}" class="btn btn-primary">Nuevo teclado</a>
        </p>
    </div>

    @if ($teclados->isNotEmpty())
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
        @foreach($teclados as $teclado)
            <tr>
            <th scope="row">{{ $teclado->id }}</th>
            <td>{{ $teclado->name }}</td>
            <td>{{ $teclado->idioma }}</td>
            <td>{{ $teclado->tamano }}</td>
            <td>{{ $teclado->tipo }}</td>
            <td>{{ $teclado->cherry }}</td>
            <td> 
                <form action="{{ route('teclados.destroy', $teclado) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('teclados.showt', $teclado) }}" class="btn btn-link"><span class="oi oi-eye"></span></a> 
                    <a href="{{ route('teclados.editt', $teclado) }}" class="btn btn-link"><span class="oi oi-pencil"></span></a>
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