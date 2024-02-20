<body class="body">
    <button type="button" class="btn btn-secondary"><a href="{{route('productos.index')}}">Volver</a></button>
        <div class="images" >
            <img src="{{ $producto->imagen_url }}" alt="{{ $producto->nombre }}" class="imgDetalle" />
        </div>
        <div class="product" style="left: 700px; top:200px">
            <p>{{ $producto->categoria }}</p>
            <h1>{{ $producto->nombre }}</h1>
            <h2>{{ $producto->precio }}€</h2>
            <p class="desc">{{ $producto->descripcion }}</p>
            <form action="{{route('carrito.add')}}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{$producto->id}}">
                <input type="submit" name="btn" class="btn btn-success w-100" value="Añadir al carrito">
                @admin
                    <button class="add">Botón de Administrador</button>
                @endadmin
            </form>
        </div>



</body>
