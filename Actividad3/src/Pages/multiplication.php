<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css">
</head>
<body id="colorBody">
<?php include '../Layouts/header.php'; ?> 
<h2 class="text-center">GENERADOR DE TABLAS DE MULTIPLICAR</h2>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-container">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="numero" class="form-label">Ingrese un número para ver su tabla de multiplicar:</label>
                            <input type="number" class="form-control" name="numero" id="numero" required min="1" max="100">
                        </div>
                        <button type="submit" class="btn btn-dark w-100">Generar Tabla</button>
                    </form>

                    <div class="tabla-multiplicar mt-4">
                        <?php
                        if (isset($_POST['numero']) && is_numeric($_POST['numero'])) {
                            $numero = (int)$_POST['numero'];

                            echo "<h3 class='text-center'>Tabla de multiplicar del $numero</h3>";
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead class='table-dark'><tr><th>Operación</th><th>Resultado</th></tr></thead>";
                            echo "<tbody>";
                            for ($i = 1; $i <= 9; $i++) {
                                $resultado = $numero * $i;
                                echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../Layouts/footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>