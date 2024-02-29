
@extends('layouts.plantilla')

@section('content')
    <h1 id="tituloCat">{{$categoria}}</h1>
    @component('productos._components.producto', ['productos' => $productos])
    @endcomponent
    @component('productos._components.menuLateral', ['categorias' => $categorias])
    @endcomponent
@endsection
