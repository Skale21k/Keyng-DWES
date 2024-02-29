@extends('layouts.plantilla')

@section('title', 'Registrar Usuario')
@section('content')

<h2>Edición de Usuario</h2>

@component('usuarios._components.register')
    @slot('usuarios', $usuario)
@endcomponent
@endsection