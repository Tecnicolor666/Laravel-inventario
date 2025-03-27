@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header bg-primary text-white">Lista de Productos</div>
        <div class="card-body">
            <a href="{{ route('productos.create') }}" class="btn btn-success mb-3">Agregar Producto</a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>${{ $producto->precio }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
