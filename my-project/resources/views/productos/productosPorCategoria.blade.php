
@extends('layouts.plantilla')

@section('content')
    <h1>Productos por Categoría</h1>
    @foreach ($productos as $producto)
        <p>{{ $producto->nombre }}</p>
    @endforeach
@endsection
