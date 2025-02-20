@extends('plantilla')
@section('titulo', 'Editar fruta')
@include('partials.nav')
@section('contenido')
    <div class="container">
        <h1 class="mb-4">Mostrar Libro</h1>

            <div class="col-12">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{libro['titulo']}}">
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
                <a href="{{ route('libro.index') }}">Volver</a>
            </div>
    </div>
@endsection