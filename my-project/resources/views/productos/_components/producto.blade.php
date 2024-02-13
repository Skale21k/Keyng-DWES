<div class="producto">
    <img src="{{ asset('assets/img/'.$producto->imagen) }}" alt="{{ $producto->nombre }}">
    <h3>{{ $producto->nombre }}</h3>
    <p>Precio: ${{ $producto->precio }}</p>
</div>