@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
    <h1>Lista de Productos</h1>
    <div class="productos-container">
        @foreach($productos as $producto)
            <div class="producto">
                <img src="{{ asset('assets/img/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">
                <h3>{{ $producto->nombre }}</h3>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>
        @endforeach
    </div>
@endsection
