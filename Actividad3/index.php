<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="start/png" href="/public/start.png" />
    <link rel="stylesheet" href="style.css">
    <title>Usabilidad Web</title>
    <?php
        include 'src/layouts/header.php';  // Incluye el encabezado
    ?>
</head>
<body>
    <div class="container">
        <?php include 'src/layouts/content.php'; ?> <!-- Incluye el contenido principal -->
    </div>
    <?php
        include 'src/layouts/footer.php';  // Incluye el pie de página
    ?>
</body>
</html>
