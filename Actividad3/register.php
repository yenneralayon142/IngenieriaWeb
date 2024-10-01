<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>
<body id="colorBody">
<?php include 'header.php'?> 
    <h1 class="text-center">REGISTRO DE USUARIO</h1>
    <div id="form-container">
       
    <form action="databaseConnection.php" method="post">
        <div class="mb-3">
            <label for="Apellido" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre">
        </div>
        <div class="mb-3">
            <label for="Nombre" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad" id="edad">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Ciudad</label>
            <input type="text" class="form-control" name="ciudad" id="ciudad">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Celular</label>
            <input type="number" class="form-control" name="celular" id="celular">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Contraseña</label>
            <input type="text" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="Apellido" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario">
        </div>
                
        <button type="submit" class="btn btn btn-dark">Enviar</button>
    </form>
    </div>
    <?php include 'footer.php'?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>