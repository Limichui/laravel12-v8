<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});


// 🧾 1. Mostrar lista de categorías
Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');

// 🆕 2. Mostrar formulario para crear un nuevo categoría
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');

// 💾 3. Guardar nuevo categoría (envío del formulario)
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');

// 🔍 4. Mostrar un categoría específico (por su ID)
Route::get('/categorias/{id}', [CategoriaController::class, 'show'])->name('categorias.show');

// ✏️ 5. Mostrar formulario para editar un categoría existente
Route::get('/categorias/{id}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');

// 🔄 6. Actualizar los datos de un categoría existente
Route::put('/categorias/{id}', [CategoriaController::class, 'update'])->name('categorias.update');

// 🗑️ 7. Eliminar un categoría existente
Route::delete('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
