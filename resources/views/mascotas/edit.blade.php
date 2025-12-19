@extends('layouts.app')
@section('titulo', 'Editar Mascota')
@section('contenido')
    <h1>Editar Mascota</h1>
    <form action="{{ route('mascotas.update', $mascota->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nombre de la Mascota *</label>
                    <input type="text" name="nombre_mascota" value="{{ $mascota->nombre_mascota }}" class="form-control"
                        onkeypress="soloLetras(event)" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Tipo *</label>
                    <select name="tipo_animal" class="form-select" required>
                        <option value="">Seleccione...</option>
                        <option value="Perro" {{ $mascota->tipo_animal == 'Perro' ? 'selected' : '' }}>Perro</option>
                        <option value="Gato" {{ $mascota->tipo_animal == 'Gato' ? 'selected' : '' }}>Gato</option>
                        <option value="Pájaro" {{ $mascota->tipo_animal == 'Pájaro' ? 'selected' : '' }}>Pájaro</option>
                        <option value="Hamster" {{ $mascota->tipo_animal == 'Hamster' ? 'selected' : '' }}>Hamster</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dueño de la Mascota *</label>
                    <input type="text" name="nombre_dueño" value="{{ $mascota->nombre_dueño }}" class="form-control"
                        onkeypress="soloLetras(event)" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Teléfono *</label>
                    <input type="text" name="telefono" value="{{ $mascota->telefono }}" class="form-control"
                        onkeypress="soloNumeros(event)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de Salida</label>
                    <input type="date" name="fecha_salida" value="{{ $mascota->fecha_salida }}" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Estado *</label>
                    <select name="estado" class="form-select" required>
                        <option value="">Seleccione...</option>
                        <option value="hospedado" {{ $mascota->estado == 'hospedado' ? 'selected' : '' }}>Hospedado</option>
                        <option value="recogido" {{ $mascota->estado == 'recogido' ? 'selected' : '' }}>Recogido</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Instrucciones Especiales</label>
                    <textarea name="instrucciones_especiales" class="form-control" onkeypress="soloLetrasNumerosEspacios(event)"
                        rows="3">{{ $mascota->instrucciones_especiales }}</textarea>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>
    </form>
@endsection
