@extends('layouts.plantilla')

@section('title', 'Registrar Usuario')
@section('content')

    <h2>Edición de Usuario</h2>
    <div class="edit-user">
        @component('usuarios._components.register')
            @slot('usuarios', $usuario)
        @endcomponent
    </div>
    <script src="{{ asset('assets/js/login.js') }}"></script>
@endsection
