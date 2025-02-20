@extends('plantilla')
@section('titulo', 'Editar fruta')
@include('partials.nav')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Crear Libro</h1>
        <form action="{{route('libro.store')}}" method="POST" class="row g-3">
            @csrf

            <div class="col-12">
                <label for="nombre" class="form-label">Título</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
            </div>

            <div class="col-12">
                <label for="editorial" class="form-label">Editorial</label>
                <input type="text" id="editorial" name="editorial" class="form-control">
            </div>

            <div class="col-12">
                <label for="autor" class="form-label">Autor</label>
                <input type="text" id="autor" name="autor" class="form-control">
            </div>

            <div class="col-12">
                <label for="caratula" class="form-label">Carátula</label>
                <input type="text" id="caratula" name="caratula" class="form-control">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
    </div>
@endsection