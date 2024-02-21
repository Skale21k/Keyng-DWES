<!-- resources/views/admin/users.blade.php -->
@extends('layouts.plantilla')
@section('content')
@include('layouts._partials.admin')
    <h1>Productos</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
