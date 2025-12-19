@extends('layouts.app')
@section('titulo', 'Mascotas Hospedadas')
@section('contenido')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="mb-0">Mascotas Hospedadas</h1>
        <a href="{{ route('mascotas.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle d-none d-md-inline"></i> Nuevo
        </a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre Mascota</th>
                    <th>Tipo Animal</th>
                    <th>Nombre Dueño</th>
                    <th>Fecha Salida</th>
                    <th>Estado</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre_mascota }}</td>
                        <td>{{ $mascota->tipo_animal }}</td>
                        <td>{{ $mascota->nombre_dueño }}</td>
                        <td>{{ $mascota->fecha_salida }}</td>
                        <td>
                            @if ($mascota->estado == 'hospedado')
                                <span class="badge bg-success">Hospedado</span>
                            @else
                                <span class="badge bg-secondary">Recogido</span>
                            @endif
                        </td>
                        <td>
                            <div class="d-flex flex-wrap gap-1 justify-content-center">
                                <!-- Botón Ver -->
                                <a href="{{ route('mascotas.show', $mascota) }}" class="btn btn-sm btn-primary"
                                    title="Ver detalles">
                                    <i class="bi bi-eye"></i>
                                    <span class="d-none d-md-inline">Ver</span>
                                </a>

                                <!-- Botón Editar -->
                                <a href="{{ route('mascotas.edit', $mascota) }}" class="btn btn-sm btn-warning"
                                    title="Editar">
                                    <i class="bi bi-pencil"></i>
                                    <span class="d-none d-md-inline">Editar</span>
                                </a>

                                <!-- Botón Cambiar Estado -->
                                @if ($mascota->estado == 'hospedado')
                                    <form action="{{ route('mascotas.recogida', $mascota) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-sm btn-success" title="Marcar como recogida"
                                            onclick="return confirm('¿Marcar como recogida?')">
                                            <i class="bi bi-check-circle"></i>
                                            <span class="d-none d-md-inline">Recoger</span>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('mascotas.hospedado', $mascota) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-sm btn-info" title="Marcar como hospedado"
                                            onclick="return confirm('¿Marcar como hospedado?')">
                                            <i class="bi bi-house-check"></i>
                                            <span class="d-none d-md-inline">Hospedar</span>
                                        </button>
                                    </form>
                                @endif

                                <!-- Botón Eliminar -->
                                <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" title="Eliminar"
                                        onclick="return confirm('¿Eliminar definitivamente?')">
                                        <i class="bi bi-trash"></i>
                                        <span class="d-none d-md-inline">Eliminar</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
@endpush
