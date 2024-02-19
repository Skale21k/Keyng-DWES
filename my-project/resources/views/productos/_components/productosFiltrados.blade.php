
    <div class="resultados">

            <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 justify-content-center">
                @foreach($productos as $producto)
                    <div class="col mb-4">
                            <div class="product-item">
                                <figure>
                                    <a href="{{ route('productos.show', $producto) }}" title="{{ $producto->nombre }}">
                                        <img src="{{ $producto->imagen_url }}" class="tab-image" alt="{{ $producto->nombre }}">
                                    </a>
                                </figure>
                                <h3>{{ $producto->nombre }}</h3>
                                <span class="price">{{ $producto->precio }}€</span>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="input-group product-qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#minus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus">
                                                <svg width="16" height="16">
                                                    <use xlink:href="#plus"></use>
                                                </svg>
                                            </button>
                                        </span>
                                    </div>
                                    <a href="#" class="nav-link">Añadir al carro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

