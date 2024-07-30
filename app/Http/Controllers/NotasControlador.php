<?php

namespace App\Http\Controllers;

use App\Models\Notas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NotasControlador extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Notas::all();
        return view('notas.index', compact('course'));
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
        if($request->hasFile('imagen')){
            $course->imagen = $request->file('imagen')->store('public/notas');
        }
        $course->save();
        return 'Guardado exitoso';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $course = Notas::find($id);
        return view('notas.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $course = Notas::find($id);
        return view('notas.edit', compact('course'));
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $course = Notas::find($id);
        $course->fill($request->except('imagen'));
        if ($request->hasFile('imagen')){ //si desde ese campo viene un archivo hacer:
            $course->imagen = $request->file('imagen')->store('public/cursos');
            $course->save();
            return 'Curso actualizado';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    $course = Notas::find($id);

    // Elimina la imagen asociada si existe
    if ($course->imagen) {
        Storage::delete($course->imagen);
    }

    $course->delete();

    return redirect()->route('notas.index')->with('success', 'Registro eliminado exitosamente');
    }


}
