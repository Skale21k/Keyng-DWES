@extends('layouts.plantilla')

@section('content')

    <h2>Resultados de la búsqueda para "{{ $nombre }}"</h2>

        @if($productos->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
        @component('productos._components.productosFiltrados', ['productos' => $productos])
        @endif
        @endcomponent
@endsection
