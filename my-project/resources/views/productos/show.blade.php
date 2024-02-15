@extends('layouts.plantilla')

@section('title', 'Lista de Productos')

@section('content')
@foreach($productos as $producto)
    <h1>{{$producto->nombre}}</h1>
@endforeach

@endsection
