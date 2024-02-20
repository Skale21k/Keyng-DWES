@extends('layouts.plantilla')
@section('content')
<div>
    <div class="row justify-content-center">
        <div class="card-body">
            @if (Cart::count())
            <table class="table table-striped">
                <thead>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Precio por unidad</th>
                    <th>Importe</th>
                </thead>
                <tbody>
                    @foreach (Cart::content() as $producto)
                        <tr class="aling-middle">
                            <td><img src="/img/{{$producto->options->image}}" width="50"></td>
                            <td>{{$producto->name}}</td>
                            <td>{{$producto->qty}}</td>
                            <td>{{number_format($producto->price, 2)}}</td>
                            <td>{{number_format($producto->qty * $producto->price, 2)}}</td>
                            <td>

                            </td>
                    @endforeach
                </tbody>
            </table>
            @else
                <a href="/" class="text-center">El carrito está vacío, añade productos</a>
            @endif
        </div>
    </div>
</div>
@endsection
