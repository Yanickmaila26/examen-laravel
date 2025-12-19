@extends('layouts.app')
@section('titulo', 'Ver Mascota')
@section('contenido')
    <h1>Detalles de la Mascota</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <strong>Nombre de la Mascota:</strong>
                <p class="border-bottom pb-2">{{ $mascota->nombre_mascota }}</p>
            </div>
            <div class="mb-3">
                <strong>Tipo:</strong>
                <p class="border-bottom pb-2">{{ $mascota->tipo_animal }}</p>
            </div>

            <div class="mb-3">
                <strong>Dueño:</strong>
                <p class="border-bottom pb-2">{{ $mascota->nombre_dueño }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <strong>Teléfono:</strong>
                <p class="border-bottom pb-2">{{ $mascota->telefono }}</p>
            </div>

            <div class="mb-3">
                <strong>Fecha de Salida:</strong>
                <p class="border-bottom pb-2">{{ $mascota->fecha_salida }}</p>
            </div>
            <div class="mb-3">
                <strong>Estado:</strong>
                <p class="border-bottom pb-2">{{ $mascota->estado }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="mb-3">
                <strong>Instrucciones Especiales:</strong>
                <div class="border rounded p-3 bg-light">
                    {{ $mascota->instrucciones_especiales ?: 'No hay instrucciones especiales' }}
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <small class="text-muted">Fecha de ingreso: {{ $mascota->created_at->format('d/m/Y H:i') }}</small>
        </div>
        <div class="col-md-6">
            <small class="text-muted">Última actualización: {{ $mascota->updated_at->format('d/m/Y H:i') }}</small>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
@endsection
