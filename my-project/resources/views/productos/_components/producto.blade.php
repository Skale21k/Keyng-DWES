<div class="producto">
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
    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="bootstrap-tabs product-tabs">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-all" role="tabpanel"
                                aria-labelledby="nav-all-tab">
                                <div
                                    class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                                    @foreach($productos as $producto)
                                    @if($producto->cantidad == 0)
                                    <div class="col mb-4">
                                        <div class="product-item">
                                            <figure style="height:180px; width: 300px;">
                                                <a href="{{ route('productos.show', $producto) }}"
                                                    title="{{ $producto->nombre }}">
                                                    <img src="{{ $producto->imagen_url }}"
                                                        alt="{{ $producto->nombre }}"
                                                        class="tab-image" id="imagenProducto">

                                            </figure>
                                            <hr>
                                            <h3>{{ $producto->nombre }}</h3>
                                                </a>
                                            <span class="price">{{ $producto->precio }}€</span>
                                            <form action="{{route('carrito.add')}}" method="post">
                                                @csrf
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="input-group product-qty">
                                                        <span class="input-group-btn">
                                                            <button type="button"
                                                                class="quantity-left-minus btn btn-danger btn-number"
                                                                data-type="minus">
                                                                <svg width="16" height="16">
                                                                    <use xlink:href="#minus"></use>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                        <input id="cantidadInput" type="text" name="quantity[{{ $producto->id }}]"
                                                            class="form-control input-number" value="1" min="1">
                                                        <span class="input-group-btn">
                                                            <button type="button"
                                                                class="quantity-right-plus btn btn-success btn-number"
                                                                data-type="plus"
                                                                data-unidades="{{$producto->unidades}}">
                                                                <svg width="16" height="16">
                                                                    <use xlink:href="#plus"></use>
                                                                </svg>
                                                            </button>
                                                        </span>
                                                    </div>
                                                    <input type="hidden" name="id" value="{{$producto->id}}">
                                                    <input type="submit" name="btn" class="btn btn-success w-10"
                                                        value="Añadir al carrito">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    @endif
                                    @endforeach
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.quantity-right-plus').click(function (e) {
                    // Aumentar la cantidad
                    e.preventDefault();
                    var quantityInput = $(this).closest('.product-item').find('.input-number');
                    var quantity = parseInt(quantityInput.val());
                    var cantidadUnidades = $(this).data('unidades'); // Obtén las unidades del producto correcto
                    if(quantity < cantidadUnidades){
                        quantityInput.val(quantity + 1);
                    }
                });

                $('.quantity-left-minus').click(function (e) {
                    e.preventDefault();
                    var quantityInput = $(this).closest('.product-item').find('.input-number');
                    var quantity = parseInt(quantityInput.val());
                    if (quantity > 1) {
                        quantityInput.val(quantity - 1);
                    }

                });
            });
        </script>

    </section>
    <nav class="paginateNav">   {{ $productos->links() }} </nav>
</div>