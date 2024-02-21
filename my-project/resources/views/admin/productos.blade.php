<!-- resources/views/admin/users.blade.php -->
@extends('layouts.plantilla')
@section('content')
@include('layouts._partials.admin')
    <h1>Productos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <a href=""{{-- "{{ route('productos.edit', $producto) }}" --}} class="btn btn-info">Editar</a>
                       <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
