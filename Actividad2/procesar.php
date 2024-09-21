<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de Informacion</title>
</head>
<body>
    <center>
        <h1>Informacion capturada</h1>
        <?php
            //Sintaxis básica de una variable utilizamos el simbolo $
            //capturamos variables
            $apellido = $_POST["Apellido"];
            $nombre = $_POST["Nombre"];
            $edad = $_POST["Edad"];
            $genero = $_POST["Genero"];
            $pais = $_POST["Pais"];

            //Utilizaremos la función echo, print
            
            echo '<h2> Datos recibidos </h2>';
            echo '<p>Nombre:'.$apellido.'</p>';
            echo '<p>Nombre:'.$nombre.'</p>';
            echo '<p>Nombre:'.$edad.'</p>';
            echo '<p>Nombre:'.$genero.'</p>';
            echo '<p>Nombre:'.$pais.'</p>';

        ?>
    </center>
</body>
</html>