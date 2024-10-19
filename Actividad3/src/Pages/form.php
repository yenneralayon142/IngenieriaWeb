<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="start/png" href="../../public/icon.png" />
    <link rel="stylesheet" href="../../style.css">
    <title>Comentarios de Clientes</title>
</head>
<body id="colorBody">

    <!-- Header -->
    <?php include '../Layouts/header.php'; ?> 

    <!-- Título -->
    <h2 class="text-center">Lo que nuestros clientes dicen</h2>

    <!-- Sección de Comentarios de Clientes -->
    <div class="reviews-container">
        <div class="review">
            <h3>Juan Pérez</h3>
            <p>"El equipo de Sense Digital superó todas mis expectativas. Gracias a su profesionalismo, lanzamos nuestra app en tiempo récord y con una calidad impecable."</p>
        </div>

        <div class="review">
            <h3>Laura Martínez</h3>
            <p>"Excelente servicio y atención al cliente. Desde el primer contacto, se mostraron comprometidos con nuestro proyecto y brindaron soluciones innovadoras."</p>
        </div>

        <div class="review">
            <h3>Carlos Rodríguez</h3>
            <p>"La comunicación con el equipo fue excelente. Nos mantuvieron informados de cada paso del proceso y el resultado fue una app increíble que ha superado nuestras expectativas."</p>
        </div>

        <div class="review">
            <h3>María López</h3>
            <p>"Recomiendo Sense Digital a cualquier empresa que busque desarrollar una app. Nos ayudaron en cada etapa del proyecto y el resultado final fue excelente."</p>
        </div>
    </div>

    <!-- Título del Formulario -->
    <h2 class="text-center">Formulario de Envío de Información</h2>

    <!-- Formulario -->
    <div class="form-container">
        <form action="https://formspree.io/f/mnqejjpd" method="post">
            <div class="mb-3">
                <label for="Nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="Nombres" id="nombres" required>
            </div>
            <div class="mb-3"> 
                <label for="Telefonos" class="form-label">Teléfonos</label>
                <input type="number" class="form-control" name="Telefonos" id="telefonos" required>
            </div>
            <div class="mb-3"> 
                <label for="Email" class="form-label">E-mail</label>
                <input type="email" class="form-control" name="Email" id="email" required>
            </div>
            <div class="mb-3">
                <label for="Pais" class="form-label">Empresa</label>
                <input type="text" class="form-control" name="Pais" id="pais" required>
            </div> 
            <button type="submit" class="btn btn btn-dark w-100">Enviar</button>
        </form>

        <!-- Contador de visitas -->
        <div id="page_visit_count_form" class="count alert alert-dark" role="alert">
            <!-- Aquí se mostrará el número de visitas -->
        </div>
    </div>
   
    <!-- Script del contador -->
    <script>
        // Verifica si hay un contador almacenado en el localStorage
        let visitCount = localStorage.getItem('page_visit_count_form');

        // Si no existe, lo inicializa
        if (visitCount === null) {
            visitCount = 0;
        }

        // Incrementa el contador y lo guarda
        visitCount++;
        localStorage.setItem('page_visit_count_form', visitCount);

        // Muestra el contador en el elemento con id "page_visit_count"
        const visitCountDiv = document.getElementById('page_visit_count_form');
        visitCountDiv.textContent = `Visitas a Contáctanos: ${visitCount}`;
    </script>
    <!-- Footer -->
    <?php include '../Layouts/footer.php'; ?> 
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</html>
