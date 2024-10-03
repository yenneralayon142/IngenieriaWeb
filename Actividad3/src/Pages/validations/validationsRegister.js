            document.getElementById('registroForm').addEventListener('submit', function(event) {
            let isValid = true;

            // Obtener los valores de los campos
            const nombre = document.getElementById('nombre').value.trim();
            const apellido = document.getElementById('apellido').value.trim();
            const edad = document.getElementById('edad').value.trim();
            const ciudad = document.getElementById('ciudad').value.trim();
            const celular = document.getElementById('celular').value.trim();
            const usuario = document.getElementById('usuario').value.trim();
            const password = document.getElementById('password').value.trim();

            // Limpiar mensajes de error previos
            document.getElementById('nombreError').textContent = '';
            document.getElementById('apellidoError').textContent = '';
            document.getElementById('edadError').textContent = '';
            document.getElementById('ciudadError').textContent = '';
            document.getElementById('celularError').textContent = '';
            document.getElementById('usuarioError').textContent = '';
            document.getElementById('passwordError').textContent = '';

            // Validaciones
            if (nombre === '') {
                document.getElementById('nombreError').textContent = 'Por favor, ingresa tu nombre.';
                isValid = false;
            }

            if (apellido === '') {
                document.getElementById('apellidoError').textContent = 'Por favor, ingresa tu apellido.';
                isValid = false;
            }

            if (edad === '' || isNaN(edad) || edad < 18 || edad > 120) {
                document.getElementById('edadError').textContent = 'Ingresa una edad válida entre 18 y 120 años.';
                isValid = false;
            }

            if (ciudad === '') {
                document.getElementById('ciudadError').textContent = 'Por favor, ingresa tu ciudad.';
                isValid = false;
            }

            if (!/^\d{10}$/.test(celular)) {
                document.getElementById('celularError').textContent = 'El número de celular debe tener 10 dígitos.';
                isValid = false;
            }

            if (usuario === '') {
                document.getElementById('usuarioError').textContent = 'Por favor, ingresa un nombre de usuario.';
                isValid = false;
            }

            if (password.length < 6) {
                document.getElementById('passwordError').textContent = 'La contraseña debe tener al menos 6 caracteres.';
                isValid = false;
            }

            // Si alguna validación falla, prevenir el envío del formulario
            if (!isValid) {
                event.preventDefault();
            }
        });