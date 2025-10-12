@extends('estudiantes.app')

@section('title', 'Crear Estudiante')

@section('content')
    <h1 class="mb-4 text-center">Registrar Nuevo Estudiante</h1>

    <form action="{{ route('estudiantes.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del estudiante</label>
            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej. María Gómez" required>
        </div>

        <div class="text-end">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-success">Guardar</button>
        </div>
    </form>
@endsection
