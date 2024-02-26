@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('content')

@if(Auth::check())
    <h2>Bienvenido, {{ Auth::user()->nombre }}</h2>
    <p>Email: {{ Auth::user()->email }}</p>
    @if(Auth::user()->rol == "user")
        <p>Direccion: {{ Auth::user()->direccion }}</p>
    @else
        <p>Rol: {{ Auth::user()->rol }}</p>
    @endif
    

@endif
<form action="{{ route('usuarios.logout') }}" method="POST">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>


@endsection