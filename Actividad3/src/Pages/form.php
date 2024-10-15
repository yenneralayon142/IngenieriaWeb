<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="start/png" href="../../public/icon.png" />
    <link rel="stylesheet" href="../../style.css">
</head>
<body id="colorBody">
    <?php include '../Layouts/header.php'; ?> 
    <h2 class="text-center">FORMULARIO DE ENVIO DE INFORMACIÓN</h2>
    
    <div class="form-container">
       
        <form action="databaseConnection.php" method="post">
            <div class="mb-3">
                <label for="Nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombres" id="nombres">
            </div>
            <div class="mb-3"> 
                <label for="Telefonos" class="form-label">Teléfonos</label>
                <input type="number" class="form-control" name="Telefonos" id="telefonos">
            </div>
            <div class="mb-3"> 
                <label for="Email" class="form-label">E-mail</label>
                <input type="Email" class="form-control" name="Email" id="email">
            </div>
            <div class="mb-3">
                <label for="Pais" class="form-label">Empresa</label>
                <input type="text" class="form-control" name="Pais" id="pais">
            </div> 
            <button type="submit" class="btn btn btn-dark w-100">Enviar</button>
        </form>
    </div>
    <?php include '../Layouts/footer.php'; ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>