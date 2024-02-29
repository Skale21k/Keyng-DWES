<!-- resources/views/admin/users.blade.php -->
@extends('layouts.plantilla')
@section('content')
@include('layouts._partials.admin')
    <button type="submit" class="btn btn-success"><a href="{{route('productos.create')}}">Añadir un producto</a></button>
    <h1>Productos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td><img src="{{$producto->imagen_url}}" alt="{{ $producto->nombre }}" width="60"></td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}€</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-info">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                </tr>
            @endforeach
        </tbody>
    </table>
    <nav class="paginateNav">   {{ $productos->links() }} </nav>
@endsection
