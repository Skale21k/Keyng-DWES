<!-- resources/views/index.blade.php -->

@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
@component('productos._components.producto', ['productos' => $productos])
    @endcomponent
@endsection
