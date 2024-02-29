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
                    <input type="text" name="quantity[{{ $producto->id }}]"
                        class="form-control input-number" value="1" min="1">
                    <span class="input-group-btn">
                        <button type="button"
                            class="quantity-right-plus btn btn-success btn-number"
                            data-type="plus">
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
