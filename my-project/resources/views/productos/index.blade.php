
@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
@component('productos._components.producto', ['productos' => $productos])
    @endcomponent
    <div id="menuIndex">
        <h2>Categorías</h2>
        <ul >
            @foreach($productos->unique('categoria') as $producto)
            <li><a href="{{ route('productos.productosPorCategoria', ['categoria' => $producto->categoria]) }}">{{ $producto->categoria }}</a></li>
            @endforeach
        </ul>
      </div>
@endsection
