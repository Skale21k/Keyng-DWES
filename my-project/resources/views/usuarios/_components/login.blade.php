<form action="{{ route('usuarios.auth') }}" method="POST">
@csrf
    <!-- Email input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="loginName">Email</label>
        <input type="email" id="loginName" class="form-control" name="email"/>

    </div>

    <!-- Password input -->
    <div class="form-outline mb-4">
        <label class="form-label" for="loginPassword">Contraseña</label>
        <input type="password" id="loginPassword" class="form-control" name="password" />

    </div>


    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4">Iniciar Sesión</button>

</form>
