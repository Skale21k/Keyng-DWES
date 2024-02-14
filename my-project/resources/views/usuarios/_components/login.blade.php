<form action="{{ route('usuarios.login') }}" method="POST">
    @csrf
<label for="email">Email</label>
<input type="email" name="email" id="email">
<br>
<label for="password">Password</label>
<input type="password" name="password" id="password">
<br>
<button type="submit">Iniciar Sesion</button>
</form>
