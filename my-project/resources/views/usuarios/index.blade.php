@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('content')

@if(Auth::check())
    <img src="{{ Auth::user()->imagen_url }}" alt="Foto de Usuario" style="width: 200px;"/>
    <h2>{{ Auth::user()->nombre }} </h2><br>
    <p>Email: {{ Auth::user()->email }}</p>
    @if(Auth::user()->rol == "user")
        <p>Direccion: {{ Auth::user()->direccion }}</p>
    @else
        <p>Rol: {{ Auth::user()->rol }}</p>
    @endif
    
    <a href="{{ route('tickets.index') }}" class="btn btn-info">Ver Mis Pedidos</a>

    <a href="{{ route('usuarios.edit', Auth::user()) }}" class="btn btn-info">Editar Perfil</a>

    <form action="{{ route('usuarios.logout') }}" method="POST">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>

@endif



@endsection