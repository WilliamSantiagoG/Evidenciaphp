@extends('layouts.app')

@section('title','Editar Usuario')

@section('content')

<br>
<h3 class="text-center">Editar información del usuario</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/notas/{{$course->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

        <div class="mb-3">
            <label for="codigo" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="codigo" name="codigo" value = "{{$course->codigo}}" placeholder="Ingrese el Nombre" required>
            <div class="form-text">Nombre del Usuario</div>
        </div>
        <div class="mb-3">
            <label for="Examen1" class="form-label">Numero de telefono</label>
            <input type="tel" class="form-control" id="Examen1" name="Examen1" value = "{{$course-> Examen1}}" placeholder="Ingrese el numero de telefono" min="0" max="100" required>
            <div class="form-text">Numero de telefono</div>
        </div>
        <div class="mb-3">
            <label for="Examen2" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="Examen2" name="Examen2" value = "{{$course-> Examen2}}" placeholder="Ingrese la contraseña" min="0" max="100" required>
            <div class="form-text">Escriba su contraseña</div>
        </div>
        <div class="mb-3">
            <label for="ExamenFinal" class="form-label">Descripcion de la falla</label>
            <input type="text" class="form-control" id="ExamenFinal" name="ExamenFinal" value = "{{$course-> ExamenFinal}}" placeholder="Ingrese la descripcion de la falla segun el cliente" min="0" max="100" required>
            <div class="form-text">descripcion de la falla segun el cliente</div>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Cargar foto del pc</label>
            <br>
            <input type="file" name="imagen" >
        </div>

    <br>
    <button type="submit" class="btn btn-success">Actualizar</button>
</form>


@endsection
