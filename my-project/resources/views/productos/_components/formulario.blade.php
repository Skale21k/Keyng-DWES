@php
    use App\Models\Producto;

    $modoCreacion = true;
    if (isset($producto->nombre)) {
        $modoCreacion = false;
    }

    $rutaAction = route('productos.store');
    if(!$modoCreacion){
        $rutaAction = route('productos.update', $producto);
    }

@endphp


<form action="{{$rutaAction}}" method="POST" enctype="multipart/form-data">
    @csrf
    @if(!$modoCreacion)
        @method('put')
    @endif

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $producto->nombre ?? '') }}" required>
    <br><br>

    <div class="textArea1">
        <label for="descripcion">Descripción</label>
        <textarea name="descripcion" id="descripcion" required>{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>
    </div>
    <br><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" id="precio" min="0" step="0.01" value="{{ old('precio', $producto->precio ?? '') }}" required>
    <br><br>

    <label for="unidades">Unidades</label>
    <input type="number" name="unidades" id="unidades" min="0" value="{{ old('unidades', $producto->unidades ?? '') }}" required>
    <br><br>

    <label for="imagen">Imagen</label>
    <input type="file" name="imagen" id="imagen" @if($modoCreacion) required @endif>
    <br><br>
    
    <label for="categoria">Categoria</label>
    <select name="categoria" id="categoria" required>
        <option value="Hogar" {{ (old('categoria', $producto->categoria ?? '') == 'Hogar') ? 'selected' : '' }}>Hogar</option>
        <option value="Belleza" {{ (old('categoria', $producto->categoria ?? '') == 'Belleza') ? 'selected' : '' }}>Belleza</option>
        <option value="Electrónica" {{ (old('categoria', $producto->categoria ?? '') == 'Electrónica') ? 'selected' : '' }}>Electrónica</option>
        <option value="Deporte" {{ (old('categoria', $producto->categoria ?? '') == 'Deporte') ? 'selected' : '' }}>Deporte</option>
        <option value="Moda" {{ (old('categoria', $producto->categoria ?? '') == 'Moda') ? 'selected' : '' }}>Moda</option>
        <option value="Alimentación" {{ (old('categoria', $producto->categoria ?? '') == 'Alimentación') ? 'selected' : '' }}>Alimentación</option>
    </select>
    <br><br>

    <button type="submit">{{ $modoCreacion ? 'Crear' : 'Actualizar' }}</button>
</form>



<button type="button" style="top:10px; position: relative;" onclick="history.back()">Volver</button>
