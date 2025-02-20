@extends('plantilla')
@section('titulo', 'Inicio')
@include('partials.nav')
@section('contenido')
<div class="container mt-5">
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Editorial</th>
                <th>Autor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->id}}</td>
                <td>{{ $libro->titulo}}</td>
                <td>{{ $libro->editorial}}</td>
                <td>{{ $libro->autor}}</td>
                <td>
                    <a href="{{ route('libro.prestamo')}}"></a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
@endsection