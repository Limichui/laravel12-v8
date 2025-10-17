@extends('categorias.app')

@section('title', 'Ver Categoría')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4>Detalles de la Categoría</h4>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $categoria->id }}</p>
            <p><strong>Nombre de categoría:</strong> {{ $categoria->nombre_categoria }}</p>
            <p><strong>Descripción:</strong> {{ $categoria->descripcion }}</p>
            <p><strong>Estado:</strong> {{ $categoria->estado ? 'Activo' : 'Inactivo' }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Volver
            </a>
            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">
                <i class="bi bi-pencil-square"></i> Editar
            </a>
        </div>
    </div>
@endsection