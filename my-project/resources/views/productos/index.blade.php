@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
    <h1>Lista de Productos</h1>
    <div class="contenedorH">
        @foreach($productos as $producto)
            @component('productos._components.producto', ['producto' => $producto])
            @endcomponent
        @endforeach
    </div>
    {{ $productos->links() }}
@endsection
