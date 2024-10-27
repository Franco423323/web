@extends('layouts.layout')


@section('content')
    <h1>Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $producto->nombre }}" required>

        <label for="descripcion">Descripción:</label>
        <textarea name="descripcion" required>{{ $producto->descripcion }}</textarea>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="{{ $producto->precio }}" step="0.01" required>

        <label for="fecha_caducidad">Fecha de Caducidad:</label>
        <input type="date" name="fecha_caducidad" value="{{ $producto->fecha_caducidad }}" required>

        <button type="submit">Actualizar Producto</button>
    </form>
@endsection
