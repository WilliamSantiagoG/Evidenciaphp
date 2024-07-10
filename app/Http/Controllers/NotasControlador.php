<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;

class NotasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $course = new Notas();
        $course->codigo = $request->input('codigo');
        $course->Examen1 = $request->input('Examen1');
        $course->Examen2 = $request->input('Examen2');
        $course->ExamenFinal = $request->input('ExamenFinal');
        $course->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
