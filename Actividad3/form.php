<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include 'header.php'?> 
    <h1 class="text-center">Formulario de envio de informacion</h1>
    <div>
        <form action="procesar.php" method="post">
            <label for="Apellido">Apellido</label>
            <input type="text" name="Apellido" id="Apellido"><br>
            <label for="Nombre">Nombre</label>
            <input type="text" name="Nombre"  id="Nombre"><br>
            <label for="Edad">Edad</label>
            <input type="number" name="Edad" id="Edad" required><br>
            <label for="Genero">Genero</label>
            <select name="Genero" id="Genero">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            <label for="Pais">Pais</label>
            <input type="text" name="Pais" id="Pais">
            <input type="submit" name="enviar">
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>