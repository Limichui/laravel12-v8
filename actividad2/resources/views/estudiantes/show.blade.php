@extends('estudiantes.app')

@section('title', 'Ver Estudiante')

@section('content')
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">
            <h4>Detalles del Estudiante</h4>
        </div>
        <div class="card-body">
            <p><strong>ID:</strong> {{ $estudiante->id }}</p>
            <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver</a>
            <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">Editar</a>
        </div>
    </div>
@endsection

