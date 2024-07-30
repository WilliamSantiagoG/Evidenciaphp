@extends('layouts.app')

@section('title', 'Listado de usuarios')

@section('content')

<br>
<h3 class="text-center custom-title">Usuarios registrados</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)
        <div class="col-sm-4 mb-4">
            <div class="card shadow custom-card">
                <img src="{{ Storage::url($cursito->imagen) }}" class="card-img-top" alt="Imagen de {{ $cursito->codigo }}">
                <div class="card-body">
                    <h5 class="card-title">Nombre: {{ $cursito->codigo }}</h5>
                    <p class="card-text">Teléfono: {{ $cursito->Examen1 }}</p>
                    <p class="card-text">Contraseña: {{ $cursito->Examen2 }}</p>
                    <p class="card-text">Descripción de las fallas: {{ $cursito->ExamenFinal }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="/notas/{{ $cursito->id }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<style>
    .custom-title {
        color: white;
        font-size: 2rem;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 0.1rem;
    }

    .custom-card {
        width: 100%; /* Asegura que las cartas llenen el ancho disponible */
        height: 100%; /* Asegura que las cartas llenen la altura disponible */
        background-color: rgb(44, 45, 49);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-img-top {
        width: 100%;
        height: 200px; /* Ajusta la altura según sea necesario */
        object-fit: cover;
    }

    .card-body {
        background-color: rgb(44, 45, 49);
        color: white;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-title {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .card-text {
        margin-bottom: 0.5rem;
    }

    .btn-primary {
        background-color: rgb(0, 123, 255);
        border-color: rgb(0, 123, 255);
    }

    .btn-primary:hover {
        opacity: 0.8;
    }
</style>

@endsection
