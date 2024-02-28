@extends('layouts.plantilla')
@section('title', 'Home')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
        <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
            <path fill="currentColor"
                d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
        </symbol>
        <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
            <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
        </symbol>
    </defs>
</svg>
@section('content')
    <h1>Productos Más Vendidos</h1>


    @foreach ($productosPorCategoria as $categoria => $productos)
        <div class="categoria">
            <h2>{{ $categoria }}</h2>
            <hr>
        </div>
        <div id="formList">
            <div id="list">
                @foreach ($productos as $producto)
                    @component('productos._components.productosBuenos', ['producto' => $producto])
                    @endcomponent
                @endforeach
            </div>
        </div>
    @endforeach

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Función para aumentar y disminuir la cantidad
            $('.quantity-right-plus').click(function (e) {
                // Aumentar la cantidad
                e.preventDefault();
                var quantityInput = $(this).closest('.product-item').find('.input-number');
                var quantity = parseInt(quantityInput.val());
                quantityInput.val(quantity + 1);
            });

            $('.quantity-left-minus').click(function (e) {
                // Disminuir la cantidad
                e.preventDefault();
                var quantityInput = $(this).closest('.product-item').find('.input-number');
                var quantity = parseInt(quantityInput.val());
                if (quantity > 1) {
                    quantityInput.val(quantity - 1);
                }
            });
        });
    </script>
@endsection
