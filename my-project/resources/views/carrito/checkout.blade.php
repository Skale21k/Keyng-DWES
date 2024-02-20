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
                            <td><img src="" width="50"></td>
                            <td>{{$producto->name}}</td>
                            <td>{{$producto->qty}}</td>
                            <td>{{number_format($producto->price, 2)}}</td>
                            <td>{{number_format($producto->qty * $producto->price, 2)}}</td>
                            <td>
                                <form action="{{route("carrito.remove")}}" method="post">
                                    @csrf
                                    <input type="hidden" name="rowId" value="{{$producto->rowId}}">
                                    <input type="submit" name="btn" class="btn btn-danger btn-sm" value="X">
                                </form>
                            </td>
                    @endforeach
                    <tr class="fw-bolder">
                        <td colspan="3"></td>
                        <td class="text-end">Subtotal</td>
                        <td class="text-end">{{Cart::subtotal()}}</td>
                        <td ></td>
                    </tr>
                    <tr class="fw-bolder">
                        <td colspan="3"></td>
                        <td class="text-end">Impuestos</td>
                        <td class="text-end">{{Cart::tax()}}</td>
                        <td ></td>
                    </tr>
                    <tr class="fw-bolder">
                        <td colspan="3"></td>
                        <td class="text-end">Total</td>
                        <td class="text-end">{{Cart::total()}}</td>
                        <td ></td>
                    </tr>
                </tbody>
            </table>
            <a href="{{route("carrito.clear")}}" class="text-center">Vaciar carrito</a>
            @else
            <a href="/" class="text-center">El carrito está vacío, añade productos</a>
            @endif
        </div>
    </div>
</div>
@endsection
