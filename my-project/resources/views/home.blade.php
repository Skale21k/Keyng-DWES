@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
<h1>Productos destacados</h1>
<div id="formList">
    <div id="list">

        @foreach($productosAlimentacion as $producto)
        @component('_components.destacados', ['producto' => $producto])
        @endcomponent
        @endforeach
    </div>
</div>


<div class="direction">
    <button id="prev">
        < </button>
            <button id="next"> > </button>
</div>
<script src="{{asset ('assets/js/destacados.js')}}"></script>
@endsection
