<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="start/png" href="public/icon.png" />
</head>
<body id="colorBody">
  <?php include '../Layouts/header.php'?> 
    <h2 class="text-center">DATOS ENVIADOS CON ÉXITO</h1>
    <div id="form-container">
    <?php
            //Sintaxis básica de una variable utilizamos el simbolo $
            //capturamos variables
            $apellido = $_POST["Apellido"];
            $nombre = $_POST["Nombre"];
            $edad = $_POST["Edad"];
            $genero = $_POST["Genero"];
            $pais = $_POST["Pais"];

            //Utilizaremos la función echo, print
            
            echo '<p>Nombre:'.$apellido.'</p>';
            echo '<p>Apellido:'.$nombre.'</p>';
            echo '<p>Edad:'.$edad.'</p>';
            echo '<p>Genero:'.$genero.'</p>';
            echo '<p>Pais:'.$pais.'</p>';
    ?>
  </div>
    <?php include 'footer.php'?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>