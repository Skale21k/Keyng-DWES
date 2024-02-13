@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
<h1>Home</h1>
<p>Bienvenido a la página principal</p>
<div id="formList">
    <div id="list">

        @foreach($productos as $producto)
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