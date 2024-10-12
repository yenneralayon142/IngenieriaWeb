<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
    <?php include '../Layouts/header.php'?> 
</head>
<body id="colorBody">
    <h2 class="text-center">REGISTRO DE USUARIO</h1>
    <div class="form-container">
        <form id="registroForm" method="post">
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
                <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Bogota">
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
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div> 
        </form>
        <div id="responseMessage" class="mt-3"></div>
    </div>
    <?php include '../Layouts/footer.php'?> 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Agregar jQuery -->
    <script src="../Validations/validationsRegister.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>
