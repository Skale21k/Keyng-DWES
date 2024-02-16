<div class="productoH">
    <a href="{{ route('productos.show', $producto) }}" class="aH">
    <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
    <div class="datosH">
        <h3>{{ $producto->nombre }}</h3>
        <p>Precio: ${{ $producto->precio }}</p>
    </div>
</div>
