@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-success text-white">Agregar Nuevo Producto</div>
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" class="form-control" id="precio" name="precio" required>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Guardar Producto</button>
            </form>
        </div>
    </div>
@endsection

