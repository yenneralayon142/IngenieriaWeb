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
    <div class="Mision">
        <h2 class="Mision-header"> Nuestra Misión </h2>
        <p class="Mision-Text">
             "Proporcionar servicios de consultoría de software personalizados que integren tecnología de vanguardia y metodologías ágiles, para ayudar a nuestros clientes a optimizar sus procesos, impulsar la innovación y garantizar una experiencia accesible y efectiva para todos los usuarios. Nos comprometemos a fomentar un entorno colaborativo y a crear soluciones sostenibles que generen valor a largo plazo."
        </p>
    </div>
    
    <div class="Vision">
        <h2 class="Vision-Header"> Nuestra Visión</h2>
        <p class="Vision-Text">
            "Ser la consultora de software líder en soluciones innovadoras y accesibles, transformando la manera en que las organizaciones utilizan la tecnología para alcanzar sus objetivos y mejorar la vida de las personas."
        </p>
    </div>
    
    <div class="equipo">
        <h2 class="equipo-header">Nuestro Equipo</h2>
        <div class="row">
            <div class="col-md-3">
                <h3>Diseñador</h3>
                <p>
                    El diseñador es responsable de crear la experiencia visual y la interfaz del usuario. Su enfoque está en la usabilidad y la estética, asegurando que las aplicaciones sean atractivas y fáciles de usar. Trabaja en la creación de prototipos y maquetas, y colabora con desarrolladores para garantizar que el diseño se implemente de manera efectiva.
                </p>
            </div>
            <div class="col-md-3">
                <h3>Desarrollador</h3>
                <p>
                    El desarrollador se encarga de la implementación técnica de las soluciones de software. Su labor incluye la programación, pruebas y la integración de sistemas. Colabora con diseñadores para construir interfaces funcionales y con el equipo de gestión de proyectos para asegurar que los desarrollos se alineen con los objetivos del proyecto.
                </p>
            </div>
            <div class="col-md-3">
                <h3>Scrum Master</h3>
                <p>
                    El Scrum Master actúa como facilitador para el equipo de desarrollo, ayudando a gestionar el proceso ágil. Se asegura de que el equipo siga los principios de Scrum, eliminando obstáculos y promoviendo la colaboración. Su objetivo es maximizar la productividad y fomentar un ambiente de trabajo positivo.
                </p>
            </div>
        </div>
    </div>
    <div id="page_visit_count_About" class="count alert alert-dark" role="alert"></div>
        
</body>

<script>
        // Verifica si hay un contador almacenado en el localStorage
        let visitCount = localStorage.getItem('page_visit_count_About');

        // Si no existe, lo inicializa
        if (visitCount === null) {
            visitCount = 0;
        }

        // Incrementa el contador y lo guarda
        visitCount++;
        localStorage.setItem('page_visit_count_About', visitCount);

        // Muestra el contador en el elemento con id "page_visit_count"
        const visitCountDiv = document.getElementById('page_visit_count_About');
        visitCountDiv.textContent = `Visitas a Nosotros: ${visitCount}`;
    </script>

<?php include '../Layouts/footer.php'; ?> 
    <script src="../service/registerService.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</html>