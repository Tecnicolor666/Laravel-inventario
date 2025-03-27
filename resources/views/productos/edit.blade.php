@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-warning text-white">Editar Producto</div>
        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $producto->cantidad }}" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
                </div>
                <button type="submit" class="btn btn-warning mt-3">Actualizar Producto</button>
            </form>
        </div>
    </div>
@endsection
