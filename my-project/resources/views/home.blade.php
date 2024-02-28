@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
    <h1>Productos Más Vendidos</h1>


    @foreach ($productosPorCategoria as $categoria => $productos)
        <div class="categoria">
            <h2>{{ $categoria }}</h2>
            <hr>
        </div>
        <div id="formList">
            <div id="list">
                @foreach ($productos as $producto)
                    @component('_components.destacados', ['producto' => $producto])
                    @endcomponent
                @endforeach
            </div>
        </div>
    @endforeach

@endsection
