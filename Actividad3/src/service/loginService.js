document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Evita el envío normal del formulario

        // Obtener los datos del formulario
        const formData = new FormData(loginForm);

        // Hacer la solicitud fetch
        fetch('../databaseConnection.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text()) // Obtener la respuesta como texto
        .then(data => {
            document.getElementById('responseMessage').innerHTML = data; // Mostrar el mensaje de respuesta
        })
        .catch(error => {
            document.getElementById('responseMessage').innerHTML = '<div class="text-danger">Hubo un error en la solicitud.</div>';
            console.error('Error:', error);
        });
    });
});
