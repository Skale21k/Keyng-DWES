@extends('layouts.plantilla')

@section('content')
@if ($error = $errors->first('unidades'))
    <div class="alert alert-danger">
        {{ $error }}
    </div>
@endif

    <h2>Resultados de la búsqueda para "{{ $nombre }}"</h2>
        @if($productos->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
        @component('productos._components.productosFiltrados', ['productos' => $productos])
        @endcomponent
        @endif
@endsection
