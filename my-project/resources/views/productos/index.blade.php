<!-- resources/views/productos/index.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="{{ asset('assets/css/productos.css') }}">
</head>
<body>
    <h1>Productos</h1>

    <div class="productos-container">
        @foreach($productos as $producto)
            <div class="producto">
                <img src="{{ asset('assets/img/ImgProductos'.$producto->imagen) }}" alt="{{ $producto->nombre }}">
                <h3>{{ $producto->nombre }}</h3>
                <p>Precio: ${{ $producto->precio }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>
