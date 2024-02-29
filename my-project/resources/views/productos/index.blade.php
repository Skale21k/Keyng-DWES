
@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
@if ($error = $errors->first('unidades'))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endif
@component('productos._components.producto', ['productos' => $productos])
@endcomponent
@component('productos._components.menuLateral', ['categorias' => $categorias])
@endcomponent
@endsection
