<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nosotros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.6.0/uicons-brands/css/uicons-brands.css'>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            
            <a href="/ingenieriaweb/Actividad3/index.php" class="icon-link">
                <i class="fi fi-brands-visual-basic"></i>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/ingenieriaweb/Actividad3/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ingenieriaweb/Actividad3/src/Pages/form.php">Contáctanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ingenieriaweb/Actividad3/src/Pages/table.php">Usuarios</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/ingenieriaweb/Actividad3/src/Pages/about.php">Nosotros</a>
                    </li>
                </ul>
                <div class="d-flex ms-auto">
                    <span id="current-date-time" class="me-3 date"></span> <!-- Contenedor para la fecha y hora -->
                    <a class="nav-link btn me-3" href="/ingenieriaweb/Actividad3/src/Pages/login.php">Iniciar Sesión</a>
                    <a class="nav-link btn me-3" href="/ingenieriaweb/Actividad3/src/Pages/register.php">Registrarse</a>
                </div>
            </div>
        </div>
    </nav>
</body>
<script>
    function updateDateTime() {
        const now = new Date();
        const day = now.getDate().toString().padStart(2, '0');
        const month = (now.getMonth() + 1).toString().padStart(2, '0'); // Los meses comienzan en 0
        const year = now.getFullYear();
        const hours = now.getHours().toString().padStart(2, '0');
        const minutes = now.getMinutes().toString().padStart(2, '0');
        const seconds = now.getSeconds().toString().padStart(2, '0');
        const currentDateTime = `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
        document.getElementById('current-date-time').textContent = currentDateTime;
    }

    setInterval(updateDateTime, 1000); // Actualiza cada segundo
    updateDateTime(); // Muestra la fecha y hora inmediatamente al cargar la página
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</html>
