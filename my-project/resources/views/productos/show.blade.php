@extends('layouts.plantilla')

@section('title', 'Detalles del Producto')

@section('content')
    @if ($error = $errors->first('unidades'))
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endif
    @component('productos._components.tarjetasProductos', ['producto' => $producto])
    @endcomponent
@endsection
