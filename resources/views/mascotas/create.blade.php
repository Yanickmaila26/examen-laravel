@extends('layouts.app')
@section('titulo', 'Nueva Mascota')
@section('contenido')
    <h1>Registrar Mascota</h1>
    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Nombre de la Mascota *</label>
                    <input type="text" name="nombre_mascota" class="form-control" onkeypress="soloLetras(event)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tipo *</label>
                    <select name="tipo_animal" class="form-select" required>
                        <option value="">Seleccione...</option>
                        <option value="Perro">Perro</option>
                        <option value="Gato">Gato</option>
                        <option value="Pájaro">Pájaro</option>
                        <option value="Hamster">Hamster</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Dueño de la Mascota *</label>
                    <input type="text" name="nombre_dueño" class="form-control" onkeypress="soloLetras(event)" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label class="form-label">Teléfono *</label>
                    <input type="text" name="telefono" class="form-control" onkeypress="soloNumeros(event)" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Fecha de Salida</label>
                    <input type="date" name="fecha_salida" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado *</label>
                    <select name="estado" class="form-select" required>
                        <option value="">Seleccione...</option>
                        <option value="hospedado">Hospedado</option>
                        <option value="recogido">Recogido</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Instrucciones Especiales</label>
                    <textarea name="instrucciones_especiales" class="form-control" rows="3"
                        onkeypress="soloLetrasNumerosEspacios(event)"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <a href="{{ route('mascotas.index') }}" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </form>
@endsection
