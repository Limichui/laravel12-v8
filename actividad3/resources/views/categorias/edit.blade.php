@extends('categorias.app')

@section('title', 'Editar Categoría')

@section('content')
    <h1 class="mb-4 text-center">Editar Categoría</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la categoría</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $categoria->nombre_categoria }}" required>
        </div>

        <div class="mb-3">
            <label for="nombre" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" placeholder="Descripción de la categoría (opcional)">{{ $categoria->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" name="estado" id="estado" required>
                <option value="" disabled>Seleccione el estado</option>
                <option value="1" {{ $categoria->estado == 1 ? 'selected' : '' }}>Activo</option>
                <option value="0" {{ $categoria->estado == 0 ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="text-end">
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Volver
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Actualizar
            </button>
        </div>
    </form>
@endsection
