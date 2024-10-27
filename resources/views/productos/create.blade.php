@extends('layouts.layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Nuevo Producto</h1>
    
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="fecha_caducidad">Fecha de Caducidad</label>
            <input type="date" class="form-control" id="fecha_caducidad" name="fecha_caducidad" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Producto</button>
        <a href="{{ route('productos.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
