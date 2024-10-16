<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="start/png" href="../../public/icon.png" />
    <link rel="stylesheet" href="../../style.css">
    <?php include '../Layouts/header.php'; ?>
</head>
<body>
    <div class="table-responsive">
        <table id="registerTable" class="table_Register hidden">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Ciudad</th>
                    <th>Celular</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
      <!-- Contador de visitas -->
      <div id="page_visit_count_table" class="count alert alert-dark">
    <!-- Aquí se mostrará el número de visitas -->
    </div>
      <!-- Script del contador -->
      <script>
        // Verifica si hay un contador almacenado en el localStorage
        let visitCount = localStorage.getItem('page_visit_count_table');

        // Si no existe, lo inicializa
        if (visitCount === null) {
            visitCount = 0;
        }

        // Incrementa el contador y lo guarda
        visitCount++;
        localStorage.setItem('page_visit_count_table', visitCount);

        // Muestra el contador en el elemento con id "page_visit_count"
        const visitCountDiv = document.getElementById('page_visit_count_table');
        visitCountDiv.textContent = `Visitas a Usuarios: ${visitCount}`;
    </script>
    <?php include '../Layouts/footer.php'; ?> 
    <script src="../service/registerService.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
</html>
