<div class="producto">
    <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}">
    <h3>{{ $producto->nombre }}</h3>
    <p>Precio: ${{ $producto->precio }}</p>
</div>