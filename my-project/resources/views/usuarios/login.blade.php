@extends('layouts.plantilla')

@section('title', 'Login')

@section('content')

    <h1>Login</h1>
    <div class="login-container">
        <div class="login-register">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                        aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                        aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginName">Email</label>
                            <input type="email" id="loginName" class="form-control" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="loginPassword">Contraseña</label>
                            <input type="password" id="loginPassword" class="form-control" />

                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>

                    </form>
                </div>


                <!-- Register form -->


                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <form>

                        <!-- Name input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerName">Nombre</label>
                            <input type="text" id="registerName" class="form-control" />

                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerEmail">Email</label>
                            <input type="email" id="registerEmail" class="form-control" />

                        </div>

                        <!-- Direccion input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerUsername">Dirección</label>
                            <input type="text" id="registerdirection" class="form-control" />

                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerPassword">Contraseña</label>
                            <input type="password" id="registerPassword" class="form-control" />

                        </div>

                        <!-- Repeat Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="registerRepeatPassword">Repite contraseña</label>
                            <input type="password" id="registerRepeatPassword" class="form-control" />

                        </div>

                        <!-- Submit button -->
                        <button type="submit" id="registerButton" class="btn btn-primary btn-block mb-3">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Pills content -->
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Obtener referencias a los enlaces de login y registro
            var loginLink = document.getElementById("tab-login");
            var registerLink = document.getElementById("tab-register");

            // Obtener referencias a los formularios de login y registro
            var loginForm = document.getElementById("pills-login");
            var registerForm = document.getElementById("pills-register");

            // Agregar controladores de eventos para los enlaces
            loginLink.addEventListener("click", function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                // Mostrar el formulario de login y ocultar el de registro
                loginForm.classList.add("show", "active");
                registerForm.classList.remove("show", "active");
                // Actualizar la clase activa en los enlaces
                loginLink.classList.add("active");
                registerLink.classList.remove("active");
            });

            registerLink.addEventListener("click", function(event) {
                event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
                // Mostrar el formulario de registro y ocultar el de login
                registerForm.classList.add("show", "active");
                loginForm.classList.remove("show", "active");
                // Actualizar la clase activa en los enlaces
                registerLink.classList.add("active");
                loginLink.classList.remove("active");
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            // Obtener referencias a los elementos del formulario de registro
            var registerForm = document.getElementById("registerForm");
            var passwordInput = document.getElementById("registerPassword");
            var repeatPasswordInput = document.getElementById("registerRepeatPassword");
            var registerButton = document.getElementById("registerButton");

            // Agregar un controlador de evento para el clic en el botón de registro
            registerButton.addEventListener("click", function(event) {
                // Verificar si las contraseñas coinciden
                if (passwordInput.value !== repeatPasswordInput.value) {
                    // Detener la acción predeterminada del botón
                    event.preventDefault();
                    // Mostrar un mensaje de alerta
                    alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
                }
            });
        });
    </script>
    <!-- @component('usuarios._components.login')
        -->
    @endcomponent

@endsection
