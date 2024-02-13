@extends('layouts.plantilla')
@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <p>Bienvenido a la página principal</p>
    @include('layouts._partials.destacados')
@endsection

