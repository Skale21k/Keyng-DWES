<body class="bodyH">
    <div class="contenedorH">
        <div class="productoH">
            <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
            <div class="datosH">
                <h3>{{ $producto->nombre }}</h3>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>
        </div>
    </div>
</body>
