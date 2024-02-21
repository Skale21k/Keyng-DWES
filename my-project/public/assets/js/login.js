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
    var passwordInput = document.getElementById("registerPassword");
    var repeatPasswordInput = document.getElementById("registerRepeatPassword");
    var registerButton = document.getElementById("registerButton");

    registerButton.addEventListener("click", function(event) {

        if (passwordInput.value !== repeatPasswordInput.value) {

            event.preventDefault();
            alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
        }
    });
});
