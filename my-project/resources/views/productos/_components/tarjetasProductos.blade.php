<body class="body">
    <div class="container">
        <div class="images">
            <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}" class="img" />
        </div>
        <div class="product">
            <p>{{ $producto->categoria }}</p>
            <h1>{{ $producto->nombre }}</h1>
            <h2>{{ $producto->precio }}€</h2>
            <p class="desc">{{ $producto->descripcion }}</p>
            <div class="buttons">
                <button class="add">Agregar al carrito</button>
            </div>
        </div>
    </div>
</body>
