@extends('layouts.app')

@section('title', 'Detalles de usuario')

@section('content')

<div class="d-flex justify-content-center my-4">
    <div class="card shadow custom-card">
        <img src="{{ Storage::url($course->imagen) }}" class="card-img-top" alt="Imagen de {{ $course->codigo }}">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $course->codigo }}</h5>
            <p class="card-text">Teléfono: {{ $course->Examen1 }} </p>
            <p class="card-text">Contraseña: {{ $course->Examen2 }} </p>
            <p class="card-text">Descripción de la falla: {{ $course->ExamenFinal }}</p>
            <div class="d-flex justify-content-between">
                <a href="/notas/{{$course->id}}/edit" class="btn btn-warning">Editar Usuario</a>
                <form action="{{ route('notas.destroy', $course->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este registro?')">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-card {
        background-color: rgb(44, 45, 49);
        color: white;
        width: 24rem; /* Aumenta el ancho de la tarjeta */
        font-size: 1rem;
    }
    .custom-card .card-img-top {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
    .custom-card .card-body {
        background-color: rgb(44, 45, 49);
        color: white;
    }
    .custom-card .card-title,
    .custom-card .card-text {
        color: white;
    }
    .custom-card .btn-warning {
        background-color: rgb(255, 193, 7);
        border-color: rgb(255, 193, 7);
    }
    .custom-card .btn-warning:hover {
        opacity: 0.8;
    }
    .custom-card .btn-danger {
        background-color: rgb(220, 53, 69);
        border-color: rgb(220, 53, 69);
    }
    .custom-card .btn-danger:hover {
        opacity: 0.8;
    }
</style>

@endsection
