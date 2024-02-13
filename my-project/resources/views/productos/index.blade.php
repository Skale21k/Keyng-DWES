@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
<h1>Lista de Productos</h1>
<div class="productos-container">
    @foreach($productos as $producto)
    @component('productos._components.producto', ['producto' => $producto])
    @endcomponent
    @endforeach
</div>
@endsection