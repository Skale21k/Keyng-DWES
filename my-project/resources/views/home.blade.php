@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
<h1>Productos Más Vendidos</h1>

<div id="formList">

    <div id="list">

        @foreach($productosMasVendidos as $producto)
        @component('_components.destacados', ['producto' => $producto])
        @endcomponent
        @endforeach
    </div>
</div>


<script src="{{asset ('assets/js/destacados.js')}}"></script>
@endsection