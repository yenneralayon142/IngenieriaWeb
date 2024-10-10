<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>
<body id="colorBody">
    <?php include '../Layouts/header.php'?> 
    <h2 class="text-center">INICIO DE SESIÓN</h1>
    <div class="form-container">
        <form id="loginForm" method="post">
            <div class="mb-3">
                <label for="login_usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="login_usuario" id="login_usuario" placeholder="root" required>
                <div id="usuarioError" class="text-danger"></div> <!-- Mensaje de error para usuario -->
            </div>
            <div class="mb-3">
                <label for="login_password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Ingrese su contraseña" required>  
                <div id="passwordError" class="text-danger"></div> <!-- Mensaje de error para contraseña -->
            </div> 
            <div class="d-flex justify-content-center mt-3">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div> 
        </form>
        <div class="d-flex justify-content-center mt-3">
            <div id="responseMessage" class="mt-3"></div> <!-- Para mostrar mensajes de respuesta -->
        </div> 
    </div>
    <?php include '../Layouts/footer.php'?> 
</body>
    <!-- Asegúrate de cargar los scripts al final del body -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Agregar jQuery -->
    <script src="../service/loginService.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    
  