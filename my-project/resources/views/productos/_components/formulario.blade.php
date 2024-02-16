<form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <br><br>
    <div class="textArea1">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" placeholder="Descripción" required></textarea>
    </div>
    <br><br>
    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio" min="0" value="0">
    <br><br>
    <label for="unidades">Unidades</label>
    <input type="number" name="unidades" id="unidades" min="0" value="0">
    <br><br>
    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" id="imagen" required>
    <br><br>
    <label for="categoria">Categoria</label>
    <select name="categoria" id="categoria" required>
        <option value="Hogar">Hogar</option>
        <option value="Belleza">Belleza</option>
        <option value="Electrónica">Electrónica</option>
        <option value="Deporte">Deporte</option>
        <option value="Moda">Moda</option>
        <option value="Alimentación">Alimentación</option>
    </select>
    <br><br>

    <button type="submit">Crear</button>
</form>
