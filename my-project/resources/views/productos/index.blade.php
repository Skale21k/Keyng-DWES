
@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
@component('productos._components.producto', ['productos' => $productos])
@endcomponent
@component('productos._components.menuLateral', ['categorias' => $categorias])
@endcomponent
@endsection
