@extends('layouts.plantilla')

@section('title', 'Usuario')

@section('content')

<form action="{{ route('usuarios.logout') }}" method="POST">
    @csrf
    <button type="submit">Cerrar sesión</button>
</form>


@endsection
