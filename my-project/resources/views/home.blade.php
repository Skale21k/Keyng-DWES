@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
<h1>Productos destacados</h1>

<div class="categoria">
    <h2>Alimentación</h2>
    <hr>
</div>
<div id="formList">

    <div id="list">

        @foreach($productosAlimentacion as $producto)
        @component('_components.destacados', ['producto' => $producto])
        @endcomponent
        @endforeach
    </div>
</div>

<div class="direction">
    <button id="prev">&lt;</button>
    <button id="next">&gt;</button>
</div>

<div class="categoria">
    <h2>Hogar</h2>
    <hr>

</div>
<div id="formList">
    <div id="list">

        @foreach($productosHogar as $producto)
        @component('_components.destacados', ['producto' => $producto])
        @endcomponent
        @endforeach
    </div>
</div>

<script src="{{asset ('assets/js/destacados.js')}}"></script>
@endsection