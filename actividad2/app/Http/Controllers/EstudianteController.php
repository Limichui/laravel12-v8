<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    // Mostrar todos los estudiantes
    public function index()
    {
        $estudiantes = Estudiante::all(); 
        return view('estudiantes.index', compact('estudiantes'));
    }

    // Mostrar formulario para crear estudiante
    public function create()
    {
        return view('estudiantes.create');
    }

    // Guardar nuevo estudiante
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Estudiante::create([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('estudiantes.index')
                        ->with('success', 'Estudiante registrado correctamente');
    }

    // Mostrar un estudiante específico
    public function show($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.show', compact('estudiante'));
    }

    // Mostrar formulario para editar estudiante
    public function edit($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('estudiantes.edit', compact('estudiante'));
    }

    // Actualizar estudiante
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $estudiante = Estudiante::findOrFail($id);
        $estudiante->update([
            'nombre' => $request->nombre,
        ]);

        return redirect()->route('estudiantes.index')
                        ->with('success', 'Estudiante actualizado correctamente');
    }

    // Eliminar estudiante
    public function destroy($id)
    {
        $estudiante = Estudiante::findOrFail($id);
        $estudiante->delete();

        return redirect()->route('estudiantes.index')
                        ->with('success', 'Estudiante eliminado correctamente');
    }
}
