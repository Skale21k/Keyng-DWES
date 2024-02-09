<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <br>
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <br>
    <label for="direccion">Unidades</label>
    <input type="text" name="direccion" id="direccion">
    <br>

    <button type="submit">Registrarse</button>
</form>
