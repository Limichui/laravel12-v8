@extends('categorias.app')

@section('title', 'Crear Categoría')

@section('content')
    <h1 class="mb-4 text-center">Registrar Nueva Categoría</h1>

    <form action="{{ route('categorias.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la categoría</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Descripción de la categoría (opcional)"></textarea>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" name="estado" id="estado" required>
                <option value="" disabled selected>Seleccione el estado</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
        </div>

        <div class="text-end">
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle"></i> Cancelar
            </a>
            <button type="submit" class="btn btn-success">
                <i class="bi bi-save"></i> Guardar
            </button>
        </div>
    </form>
@endsection