@extends('layouts.app')

@section('title','listado de calificaciones')

@section('content')

<br>
<h3 class = "text-center">Listado de calificaciones</h3>
<br>
<div class="row">
    @foreach ($course as $cursito)
    <div class="col-sm">
        <div class="card shadow" style="width: 18rem;">
            <img src="{{ Storage::url($cursito->imagen) }}" class="card-img-top fixed-size-img" alt="...">
            <div class="card-body">
                <h5 class="card-title">Codigo: {{ $cursito->codigo }}</h5>
                <p class="card-text">Examen 1: {{ $cursito->Examen1 }}</p>
                <p class="card-text">Examen 2: {{ $cursito->Examen2 }}</p>
                <p class="card-text">Examen Final: {{ $cursito->ExamenFinal }}</p>
                <a href="/notas/{{$cursito->id}}" class="btn btn-primary">Ver más</a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<style>
.fixed-size-img {
    width: 100%;
    height: 200px; /* Ajusta esta altura según tus necesidades */
    object-fit: contain; /* Esto asegura que la imagen se ajuste dentro del contenedor sin recortarse */
}
</style>


@endsection
