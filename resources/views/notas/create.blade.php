@extends('layouts.app')

@section('title','crear nota')

@section('content')
<br>
<style>
    .form-container {
        background-color: #f8f9fa; /* Color de fondo gris claro */
        padding: 20px;
        border-radius: 5px;
        max-width: 600px; /* Ancho máximo del contenedor */
        margin: 0 auto; /* Centramos el contenedor */
    }
    .form-control {
        width: 100%; /* Aseguramos que las cajas de texto ocupen el 100% del contenedor */
    }
</style>

<div class="form-container">
    <form action="/notas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="codigo" class="form-label">Código</label>
            <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el código" required>
            <div class="form-text">Código único del estudiante.</div>
        </div>
        <div class="mb-3">
            <label for="Examen1" class="form-label">Examen 1</label>
            <input type="number" class="form-control" id="Examen1" name="Examen1" placeholder="Ingrese la nota del Examen 1" min="0" max="100" required>
            <div class="form-text">Nota del primer examen (0-100).</div>
        </div>
        <div class="mb-3">
            <label for="Examen2" class="form-label">Examen 2</label>
            <input type="number" class="form-control" id="Examen2" name="Examen2" placeholder="Ingrese la nota del Examen 2" min="0" max="100" required>
            <div class="form-text">Nota del segundo examen (0-100).</div>
        </div>
        <div class="mb-3">
            <label for="ExamenFinal" class="form-label">Examen Final</label>
            <input type="number" class="form-control" id="ExamenFinal" name="ExamenFinal" placeholder="Ingrese la nota del Examen Final" min="0" max="100" required>
            <div class="form-text">Nota del examen final (0-100).</div>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Cargar foto del alumno</label>
            <br>
            <input type="file" name="imagen" >

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


@endsection
