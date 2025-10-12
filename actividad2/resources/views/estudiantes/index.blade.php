@extends('estudiantes.app')

@section('title', 'Listado de Estudiantes')

@section('content')
    <h1 class="mb-4 text-center">Listado de Estudiantes</h1>

    <div class="text-end mb-3">
        <a href="{{ route('estudiantes.create') }}" class="btn btn-primary">➕ Nuevo</a>
    </div>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($estudiantes as $estudiante)
                <tr>
                    <td class="col-1">{{ $estudiante->id }}</td>
                    <td class="col-7">{{ $estudiante->nombre }}</td>
                    <td class="col-4">
                        <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-sm btn-info">Ver</a>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
