@php
    use App\Models\User;

    $modoCreacion = true;
    if (isset($producto->nombre)) {
        $modoCreacion = false;
    }

    $rutaAction = route('usuarios.store');
    if(!$modoCreacion){
        $rutaAction = route('usuarios.update', $producto);
    }

@endphp

<form action="{{$rutaAction}}" method="POST">

    @csrf
    @if(!$modoCreacion)
        @method('put')
    @endif

    <!-- Name input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerName" >Nombre</label>
        <input type="text" id="registerName" class="form-control" name="nombre" value="{{ old('nombre', $usuarios->nombre ?? '') }}" required/>

    </div>

    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerEmail">Email</label>
        <input type="email" id="registerEmail" class="form-control" name="email" value="{{ old('email', $usuarios->email ?? '') }}" required/>

    </div>

    <!-- Direccion input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerUsername">Dirección</label>
        <input type="text" id="registerdirection" class="form-control" name="direccion" value="{{ old('direccion', $usuarios->direccion ?? '')}}" required/>

    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerPassword">Contraseña</label>
        <input type="password" id="registerPassword" class="form-control" name="password" value="{{ old('password', $usuarios->password ?? '')}}" required/>

    </div>

    <!-- Repeat Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="registerRepeatPassword">Repite contraseña</label>
        <input type="password" id="registerRepeatPassword" class="form-control" value="{{ old('password', $usuarios->password ?? '')}}" required/>

    </div>

    <!-- Submit button -->
    <button type="submit" id="registerButton" class="btn btn-primary btn-block mb-3">Sign in</button>
</form>
