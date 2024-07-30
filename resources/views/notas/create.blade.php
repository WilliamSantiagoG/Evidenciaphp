@extends('layouts.app')

@section('title', 'Agregar usuario')

@section('content')
<div class="container">
    <div class="form-container">
        <form action="/notas" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="codigo" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el Nombre" required>
                <div class="form-text">Nombre de Usuario</div>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" id="telefono" name="Examen1" placeholder="Ingrese el número de teléfono" required>
                <div class="form-text">Número de teléfono</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="password" name="Examen2" placeholder="Ingrese la Contraseña" required>
                <div class="form-text">Ingrese la contraseña</div>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción de la falla</label>
                <textarea class="form-control form-textarea" id="descripcion" name="ExamenFinal" placeholder="Ingrese la descripción de la falla" required></textarea>
                <div class="form-text">Descripción de la falla según el cliente</div>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">Cargar foto del PC</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>
@endsection
