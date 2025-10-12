@extends('estudiantes.app')

@section('title', 'Editar Estudiante')

@section('content')
    <h1 class="mb-4 text-center">Editar Estudiante</h1>

    <form action="{{ route('estudiantes.update', $estudiante->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del estudiante</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $estudiante->nombre }}">
        </div>

        <div class="text-end">
            <a href="{{ route('estudiantes.index') }}" class="btn btn-secondary">Volver</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection

