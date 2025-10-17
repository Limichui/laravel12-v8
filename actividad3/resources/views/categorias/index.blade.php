@extends('categorias.app')

@section('title', 'Listado de Categorías')

@section('content')
    <h1 class="mb-4 text-center">Listado de Categorías</h1>

    <div class="text-end mb-3">
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Nuevo
        </a>
    </div>

    <table class="table table-striped table-bordered shadow-sm">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Esatdo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td class="col-1">{{ $categoria->id }}</td>
                    <td class="col-4">{{ $categoria->nombre_categoria }}</td>
                    <td class="col-4">{{ $categoria->descripcion }}</td>
                    <td class="col-1">{{ $categoria->estado ? 'Activo' : 'Inactivo' }}</td>
                    <td class="col-2">
                        <a href="{{ route('categorias.show', $categoria->id) }}" class="text-info icon-hover me-2" style="text-decoration: none;">
                            <i class="bi bi-eye"></i>
                        </a>
                        <a href="{{ route('categorias.edit', $categoria->id) }}" class="border-0 bg-transparent text-warning icon-hover p-0 me-2" style="text-decoration: none;">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <button class="border-0 bg-transparent text-danger icon-hover p-0" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $categoria->id }}" style="text-decoration: none;">
                            <i class="bi bi-trash"></i>
                        </button>   
                    </td>
                </tr>

                <!-- Modal -->
                <div class="modal fade" id="deleteModal{{ $categoria->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $categoria->id }}" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel{{ $categoria->id }}">Confirmar eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        ¿Está seguro que desea eliminar la categoría "<strong>{{ $categoria->nombre_categoria }}</strong>"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle"></i> Cancelar
                        </button>

                        <!-- Formulario de eliminación -->
                        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="bi bi-trash"></i> Eliminar
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
                </div>
            @endforeach
        </tbody>
    </table>
@endsection
