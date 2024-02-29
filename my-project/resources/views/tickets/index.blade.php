@extends('layouts.plantilla')

@section('title', 'Tickets')

@section('content')
<div class="container-fluid">
    <h1 class="mt-5 mb-4">Mis Pedidos</h1>
    @if($tickets->isEmpty())
    <div class="alert alert-warning" role="alert">
        No tienes pedidos.
    </div>
    @else
    @php $pedidoNumero = 1 @endphp
    <div class="row">
        @foreach($tickets as $ticket)
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">Pedido Nº{{ $pedidoNumero++ }}</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><strong>Fecha de compra:</strong> {{ $ticket->fecha }}</p>
                    <p class="card-text"><strong>Total:</strong> {{ $ticket->total }} €</p>
                    <h6 class="card-subtitle mb-2 text-muted">Detalles:</h6>
                    <ul class="list-group list-group-flush">
                        @foreach($ticket->detalles as $detalle)
                        <li class="list-group-item">
                            <h6 class="mb-0">{{ $detalle->producto->nombre }}</h6>
                            <p class="mb-1">Cantidad: {{ $detalle->cantidad }}</p>
                            <p class="mb-1">Precio unitario: {{ $detalle->producto->precio }} €</p>
                            <p class="mb-0">Subtotal: {{ $detalle->cantidad * $detalle->producto->precio }} €</p>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
<a onclick="history.back()" class="btn btn-primary">Volver</a>
@endsection
