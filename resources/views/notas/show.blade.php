@extends('layouts.app')

@section('title','Detalles de calificaciones')

@section('content')

<div class="d-flex justify-content-center my-4">
    <div class="card shadow" style="width: 14rem; font-size: 1rem;">
        <img src="{{ Storage::url($course->imagen) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Codigo: {{ $course->codigo }}</h5>
            <p class="card-text">Examen 1: {{ $course->Examen1 }} de 100</p>
            <p class="card-text">Examen 2: {{ $course->Examen2 }} de 100</p>
            <p class="card-text">Examen Final: {{ $course->ExamenFinal }} de 100</p>
            <a href="/notas/{{$course->id}}/edit" class="btn btn-primary">Editar Notas</a>
        </div>
    </div>
</div>


@endsection
