<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

Route::get('/', function () {
    return view('welcome');
});

// 1. Mostrar lista de estudiantes
Route::get('/estudiantes', [EstudianteController::class, 'index'])->name('estudiantes.index');

// 2. Mostrar formulario para crear un nuevo estudiante
Route::get('/estudiantes/create', [EstudianteController::class, 'create'])->name('estudiantes.create');

// 3. Guardar nuevo estudiante (envío del formulario)
Route::post('/estudiantes', [EstudianteController::class, 'store'])->name('estudiantes.store');

// 4. Mostrar un estudiante específico (por su ID)
Route::get('/estudiantes/{id}', [EstudianteController::class, 'show'])->name('estudiantes.show');

// 5. Mostrar formulario para editar un estudiante existente
Route::get('/estudiantes/{id}/edit', [EstudianteController::class, 'edit'])->name('estudiantes.edit');

// 6. Actualizar los datos de un estudiante existente
Route::put('/estudiantes/{id}', [EstudianteController::class, 'update'])->name('estudiantes.update');

// 7. Eliminar un estudiante existente
Route::delete('/estudiantes/{id}', [EstudianteController::class, 'destroy'])->name('estudiantes.destroy');