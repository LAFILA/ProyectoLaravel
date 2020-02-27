@extends('layouts.app')

@section('content')
<div class="container">
<div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/usuarios') }}">Usuarios</a>
                </li>
                <br><br><br>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/botines') }}">Botines</a>
                </li>
                <br><br><br>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/teclados') }}">Teclados</a>
                </li>
                <br><br><br>
            </ul>
            
        </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Trabajo realizado por: Alfredo Bartolote Valle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br><br><br>
                    Estas logueado!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
