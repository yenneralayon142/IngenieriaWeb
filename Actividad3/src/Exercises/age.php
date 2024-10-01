<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body id="colorBody">
<?php include '../Layouts/header.php'; ?> 

    <h1 class="text-center">VERIFICADOR DE MAYORÍA DE EDAD</h1>
    <div id="form-container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="Edad" class="form-label">Ingrese su edad actual:</label>
                <input type="number" class="form-control" name="edad" id="edad" required>
            </div>                      
            <button type="submit" class="btn btn-dark">Enviar</button>
        </form>

        <div>
        <?php
        // Verificamos si el formulario ha sido enviado
       
            // Verificamos si la edad fue ingresada correctamente
            if (isset($_POST['edad']) && is_numeric($_POST['edad'])) {
                $edad = (int)$_POST['edad']; // Convertir la edad a un entero para mayor seguridad

                if ($edad >= 18) {
                    echo "<p>Usted es mayor de edad y tiene $edad años.</p>";
                } else {
                    echo "<p>Usted es menor de edad y tiene $edad años.</p>";
                }
            } else {
                echo "<p>Por favor, ingrese una edad válida.</p>";
            }
        
        ?>
        </div>
    </div>

    <?php include '../Layouts/footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>