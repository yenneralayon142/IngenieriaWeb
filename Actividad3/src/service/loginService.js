document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const responseMessage = document.getElementById('responseMessage');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        // Obtener los datos del formulario
        const formData = new FormData(loginForm);

        // Hacer la solicitud fetch
        fetch('../databaseConnection.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json()) // Obtener la respuesta como json
        .then(data => {
            // Limpiar mensajes previos
            responseMessage.innerHTML = '';
            responseMessage.className = ''; // Limpiar clases

            if (!data.error) {
                // Inicio de sesión exitoso
                responseMessage.innerHTML = data.message;
                responseMessage.classList.add('alert', 'alert-success');
            } else {
                // Mostrar error de inicio de sesión
                responseMessage.innerHTML = data.messageErrorLogin;
                responseMessage.classList.add('alert', 'alert-danger');
            }
        })
        .catch(error => {
            // Manejar errores de red
            responseMessage.innerHTML = '<div class="text-danger">Hubo un error en la solicitud.</div>';
            responseMessage.classList.add('alert', 'alert-danger');
            console.error('Error:', error);
        });
    });
});
