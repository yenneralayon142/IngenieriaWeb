<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Sense Digital</title>
</head>
<body id="colorBody">
    <main class="estiloContent">
        <!-- Sección de Bienvenida -->
        <section id="home" class="hero-section">
                <h1 class="text-center">Bienvenido a Nuestra Plataforma</h1>
                <p class="text-center">Proveemos soluciones personalizadas para el éxito digital de tu negocio.</p>
        </section>
        <!-- Servicios -->
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

        <!-- Sobre Nosotros -->
        <section id="about" class="about-section">
            <h2 class="text-center">Sobre Nosotros</h2>
            <p>
                Somos una consultora de desarrollo de software dedicada a proporcionar soluciones innovadoras y personalizadas para nuestros clientes. 
                Con un equipo de expertos en múltiples tecnologías y una visión orientada al futuro, 
                nos comprometemos a ayudar a las empresas a crecer y alcanzar sus objetivos a través de la tecnología.
            </p>
        </section>

        <!-- Clientes -->
        <section id="clients" class="clients-section">
            <h2 class="text-center">Nuestros Clientes</h2>
            <div class="clients-container">
                <div class="client-logo"><img src="public/microsoft.png" alt="Cliente 1"></div>
                <div class="client-logo"><img src="public/client1.png" alt="Cliente 1"></div>
                <div class="client-logo"><img src="public/client2.jpg" alt="Cliente 2"></div>
                <div class="client-logo"><img src="public/client3.jpg" alt="Cliente 3"></div>
                <div class="client-logo"><img src="public/client4.png" alt="Cliente 4"></div>
            </div>
            <p class="text-center">Algunos de nuestros clientes más destacados han confiado en nosotros para el desarrollo de sus proyectos tecnológicos.</p>
        </section>

        <!-- Preguntas Frecuentes (FAQ) -->
        <section id="faq" class="faq-section">
            <h2 class="text-center">Preguntas Frecuentes</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                            ¿Qué tipos de proyectos desarrollan?
                        </button>
                    </h2>
                    <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1">
                        <div class="accordion-body">
                            Desarrollamos una amplia gama de proyectos, desde aplicaciones web hasta plataformas móviles y soluciones de software personalizadas.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                            ¿Cuánto tiempo toma desarrollar una aplicación?
                        </button>
                    </h2>
                    <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2">
                        <div class="accordion-body">
                            El tiempo de desarrollo varía según la complejidad del proyecto. Por lo general, los proyectos pequeños pueden completarse en unas pocas semanas, mientras que los proyectos más grandes pueden tomar varios meses.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                            ¿Ofrecen soporte después de la entrega del proyecto?
                        </button>
                    </h2>
                    <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3">
                        <div class="accordion-body">
                            Sí, ofrecemos soporte y mantenimiento continuo para asegurarnos de que tu aplicación funcione sin problemas después de la entrega.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                             ¿HTML (Hypertext Markup Language)?
                        </button>
                    </h2>
                    <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4">
                        <div class="accordion-body">
                        Nuestra empresa utiliza HTML como la base de nuestras páginas web. Con HTML, estructuramos el contenido, definimos los elementos y organizamos la información de forma clara y accesible para que los usuarios puedan navegar fácilmente. Cada sección y componente de nuestras páginas comienza con un sólido diseño en HTML.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                        ¿CSS (Cascading Style Sheets)?
                        </button>
                    </h2>
                    <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5">
                        <div class="accordion-body">
                        Para darle vida y estilo a nuestras páginas, usamos CSS. Este lenguaje nos permite diseñar y personalizar los colores, las fuentes y el diseño visual de nuestros sitios web, asegurando una experiencia atractiva y coherente. Gracias a CSS, cada detalle de nuestras interfaces está optimizado para brindar una apariencia moderna y profesional.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header" id="faqHeading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                            ¿JavaScript?
                        </button>
                    </h2>
                    <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6">
                        <div class="accordion-body">
                        Implementamos JavaScript para agregar interactividad y dinamismo a nuestras páginas web. Este lenguaje permite que nuestros sitios respondan en tiempo real a las acciones de los usuarios, mejorando la experiencia de navegación con elementos como menús interactivos, actualizaciones automáticas de contenido y animaciones fluidas.
                        </div>
                    </div>
                </div>
            </div>
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
        if (visitCount === null) {
            visitCount = 0;
        }
        visitCount++;
        localStorage.setItem('page_visit_count', visitCount);
        const visitCountDiv = document.getElementById('page_visit_count');
        visitCountDiv.textContent = `Visitas a Inicio: ${visitCount}`;
    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

</body>

</html>
