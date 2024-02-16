@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
<h1>Lista de Productos</h1>
<div class="contenedorH">
    @foreach($productos as $producto)
        <div class="productoH">
            <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
            <div class="datosH">
                <h3>{{ $producto->nombre }}</h3>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>
        </div>
    @endforeach
</div>
{{( $productos->links() )}}
@endsection
