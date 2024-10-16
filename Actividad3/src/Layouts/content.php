<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body id="colorBody">
    <main class="estiloContent">
        <main class="estiloContent">
            <section id="home" class="hero-section">
                <h1 class="text-center">Desarrollo de Software a Medida</h1>
                <p class="text-center">Transformamos tus ideas en soluciones tecnológicas innovadoras</p>
            </section>

            <section id="services" class="services-section">
                <h2 class="text-center">Nuestros Servicios</h2>
                <div class="service-container">
                    <div class="service">
                        <h3>Desarrollo de Aplicaciones Web</h3>
                        <p>Ofrecemos soluciones a medida para desarrollar aplicaciones web seguras, escalables y eficientes, adaptadas a las necesidades de tu negocio.</p>
                    </div>
                    <div class="service">
                        <h3>Consultoría en Transformación Digital</h3>
                        <p>Ayudamos a las empresas a adaptarse al entorno digital mediante estrategias tecnológicas innovadoras que optimizan sus procesos.</p>
                    </div>
                    <div class="service">
                        <h3>Desarrollo de Aplicaciones Móviles</h3>
                        <p>Diseñamos y desarrollamos aplicaciones móviles nativas y multiplataforma para que tu negocio llegue a todos los usuarios, sin importar el dispositivo.</p>
                    </div>
                </div>
            </section>
        <section id="about" class="about-section">
            <h2 class="text-center">Sobre Nosotros</h2>
            <p>
                Somos una consultora de desarrollo de software dedicada a proporcionar soluciones innovadoras y personalizadas para nuestros clientes. 
                Con un equipo de expertos en múltiples tecnologías y una visión orientada al futuro, 
                nos comprometemos a ayudar a las empresas a crecer y alcanzar sus objetivos a través de la tecnología.
            </p>
        </section>
        <!-- Contador de visitas -->
        <div id="page_visit_count" class="count alert alert-dark" role="alert">
        <!-- Aquí se mostrará el número de visitas -->
        </div>
    </main>

    <!-- Script del contador -->
    <script>
        // Verifica si hay un contador almacenado en el localStorage
        let visitCount = localStorage.getItem('page_visit_count');

        // Si no existe, lo inicializa
        if (visitCount === null) {
            visitCount = 0;
        }

        // Incrementa el contador y lo guarda
        visitCount++;
        localStorage.setItem('page_visit_count', visitCount);

        // Muestra el contador en el elemento con id "page_visit_count"
        const visitCountDiv = document.getElementById('page_visit_count');
        visitCountDiv.textContent = `Visitas a Inicio: ${visitCount}`;
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
