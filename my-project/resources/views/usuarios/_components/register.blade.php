@php
use App\Models\User;

$modoCreacion = true;
if (isset($usuarios->nombre)) {
$modoCreacion = false;
}

$rutaAction = route('usuarios.store');
if(!$modoCreacion){
$rutaAction = route('usuarios.update', $usuarios);
}

@endphp

<form action="{{$rutaAction}}" method="POST" enctype="multipart/form-data">

    @csrf
    @if(!$modoCreacion)
    @method('put')
    @endif

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerName">Nombre</label>
        <input type="text" id="registerName" class="form-control" name="nombre"
            value="{{ old('nombre', $usuarios->nombre ?? '') }}" required />

    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerEmail">Email</label>
        <input type="email" id="registerEmail" class="form-control" name="email"
            value="{{ old('email', $usuarios->email ?? '') }}" required />

    </div>

    <!-- Direccion input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerUsername">Dirección</label>
        <input type="text" id="registerdirection" class="form-control" name="direccion"
            value="{{ old('direccion', $usuarios->direccion ?? '')}}" @if(!$modoCreacion) @if($usuarios->rol == "user")
        required @endif @endif/>

    </div>
    @if(!$modoCreacion && Auth::user()->rol == "admin" && $usuarios->id != Auth::user()->id)
        <!-- Rol input -->
        <div class="form-outline mb-4">
            <label class="form-label mb-2" for="registerRol">Rol</label>
            <select class="form-select" id="registerRol" name="rol" required>
                <option value="user" @if(old('rol', $usuarios->rol ?? '') == 'user') selected @endif>Usuario</option>
                <option value="admin" @if(old('rol', $usuarios->rol ?? '') == 'admin') selected @endif>Administrador
                </option>
            </select>
        </div>
    @endif

    <div class="form-outline mb-4">
        <label class="form-label" for="registerPassword">Contraseña</label>
        <input type="password" id="registerPassword" class="form-control" name="password" @if($modoCreacion) required
            @endif />

    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="registerRepeatPassword">Repite contraseña</label>
        <input type="password" id="registerRepeatPassword" class="form-control" />
    </div>

    <div class="form-outline mb-4">
        <label class="form-label" for="registerImagen">Imagen</label>
        <input type="file" id="imagen" class="form-control" name="imagen" />
    </div>


    <!-- Submit button -->
    <button type="submit" id="registerButton" class="btn btn-primary btn-block mb-3">@if($modoCreacion) Registrarse
        @else Aplicar cambios @endif </button>
</form>
@if(!$modoCreacion)
    <button type="button" style="top:10px; position: relative;" onclick="history.back()">Volver</button>
@endif
<script>
    document.getElementById('registerPassword').addEventListener('input', function () {
        if (this.value.length > 0) {
            document.getElementById('registerRepeatPassword').required = true;
        } else {
            document.getElementById('registerRepeatPassword').required = false;
        }
    });
</script>