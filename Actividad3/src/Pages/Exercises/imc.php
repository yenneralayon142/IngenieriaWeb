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
<?php include '../../Layouts/header.php'; ?> 
<h1 class="text-center">CALCULADORA DE IMC</h1>
    <div class="form-container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="peso" class="form-label">Ingrese su peso en kilogramos (kg):</label>
                <input type="number" class="form-control" name="peso" id="peso" required step="0.1">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">Ingrese su altura en centímetros (cm):</label>
                <input type="number" class="form-control" name="altura" id="altura" required>
            </div>                      
            <button type="submit" class="btn btn-dark w-100">Calcular IMC</button>
        </form>

        <div id="resultimc" class="text-center">
        <?php
        if (isset($_POST['peso']) && isset($_POST['altura']) && is_numeric($_POST['peso']) && is_numeric($_POST['altura'])) {
            $peso = (float)$_POST['peso'];
            $altura_cm = (int)$_POST['altura'];
            
            if ($peso > 0 && $altura_cm > 0) {
                $altura_m = $altura_cm / 100; 
                $imc = $peso / ($altura_m * $altura_m); 
                $imc = round($imc, 2);

                echo "<p>Su IMC es $imc.</p>";

               
                if ($imc < 18.5) {
                    echo "<p class='resultado-bajo'>Usted tiene bajo peso.</p>";
                } elseif ($imc >= 18.5 && $imc < 24.9) {
                    echo "<p class='resultado-normal'>Usted tiene un peso normal.</p>";
                } elseif ($imc >= 25 && $imc < 29.9) {
                    echo "<p class='resultado-sobrepeso'>Usted tiene sobrepeso.</p>";
                } else {
                    echo "<p class='resultado-obesidad'>Usted tiene obesidad.</p>";
                }
            } else {
                echo "<p class='resultado-error'>Por favor, ingrese valores válidos.</p>";
            }
        }
        ?>
        </div>
    </div>

    <?php include '../../Layouts/footer.php'; ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>