<h2>Creacion de porductos</h2>

<form action="{{ route('productos.create') }}" method="GET">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" id="descripcion">
    <br>
    <label for="precio">Precio</label>
    <input type="text" name="precio" id="precio">
    <br>
    <label for="unidades">Unidades</label>
    <input type="text" name="unidades" id="unidades">
    <br>
    <label for="categoria">Categoria</label>
    <input type="text" name="categoria" id="categoria">
    <br>

    <button type="submit">Crear</button>
</form>
