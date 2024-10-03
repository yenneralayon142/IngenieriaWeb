<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>
<body id="colorBody">
<?php include '../Layouts/header.php'?> 
    <h1 class="text-center">INICIO DE SESIÓN</h1>
        <div id="form-container">
        <form action="databaseConnection.php" method="post">
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="login_usuario" id="login_usuario" value="<?php echo isset($_POST['login_usuario']) ? $_POST['login_usuario'] : ''; ?>">
                <?php if (isset($errores['login_usuario'])): ?>
                    <small class="text-danger"><?php echo $errores['login_usuario']; ?></small>
                <?php endif; ?>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="login_password" id="login_password">
                <?php if (isset($errores['login_password'])): ?>
                    <small class="text-danger"><?php echo $errores['login_password']; ?></small>
                <?php endif; ?>
            </div>  
            <button type="submit" class="btn btn btn-dark">Enviar</button>

            <?php if (isset($errores['general'])): ?>
                <div class="mt-3 text-danger">
                    <?php echo $errores['general']; ?>
                </div>
            <?php endif; ?>
        </form>
        </div>
    <?php include '../Layouts/footer.php'?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>