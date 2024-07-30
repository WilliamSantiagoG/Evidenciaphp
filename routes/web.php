<?php

use App\Http\Controllers\Controladorproyecto;
use App\Http\Controllers\NotasControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo', function () {
    return 'Hola mundo';
});

Route::get('/mensaje', [Controladorproyecto::class, 'mensaje']);

Route::resource('/notas' , NotasControlador::class);


