<div id="menuIndex">
    <h2>Categorías</h2>
    <ul >
        @foreach($categorias as $categoria)
        <li><a href="{{ route('productos.productosCat', $categoria->id) }}">{{$categoria->nombre}}</a></li>
        @endforeach
    </ul>
  </div>
