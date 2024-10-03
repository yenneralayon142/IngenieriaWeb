<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
    </style>
</head>
<body id="colorBody">
    <h1 class="text-center">REGISTRO DE USUARIO</h1>
    <div id="form-container">
        <form id="registroForm" action="../databaseConnection.php" method="post">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Yenner">
                <div id="nombreError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Alayon">
                <div id="apellidoError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="number" class="form-control" name="edad" id="edad" placeholder="21">
                <div id="edadError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Bogotá">
                <div id="ciudadError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input type="tel" class="form-control" name="celular" id="celular" placeholder="3224358899">
                <div id="celularError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Messi05">
                <div id="usuarioError" class="error"></div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Ingresa tu contraseña">
                <div id="passwordError" class="error"></div>
            </div>
            <button type="submit" class="btn btn btn-dark">Enviar</button>
        </form>
    </div>
    
    <script>
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
    </script>
</body>
</html>
