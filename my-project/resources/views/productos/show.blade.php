@extends('layouts.plantilla')

@section('title', 'Detalles del Producto')

@section('content')
    @component('productos._components.tarjetasProductos', ['producto' => $producto])
    @endcomponent
@endsection
