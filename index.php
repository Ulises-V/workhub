<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkHub</title>
    <link rel="stylesheet" href="css/estiloindex.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<header>
        <div class="container-navegador">
            <div class="logo">
                <h1>WorkHub</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Acerca</a></li>
                    <li><a href="#">Trabajos</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
            <div class="post-job">
                <a href="vista/formulario-iniciarsesion.php">Iniciar Sesion</a>
            </div>
        </div>
    </header>

    <section class="hero">
    <div class="container">
        <div class="text-container">
            <h2>Encuentra el trabajo perfecto que mereces</h2>
            <p>Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
            <div class="cta-buttons">
                <a href="#" class="btn">Buscar Trabajo</a>
                <a href="#" class="btn secondary">Encontrar Talento</a>
            </div>
        </div>
    </div>
</section>

<section class="search">
    <div class="container">
        <input type="text" placeholder="Palabra clave">
        <select >
            <option value="" disabled>Categoría</option>
            <option value="marketing">Marketing</option>
            <option value="servicio-al-cliente">Servicio al Cliente</option>
            <option value="recursos-humanos">Recursos Humanos</option>
            <!-- Añade más opciones según sea necesario -->
        </select>
        <select >
            <option value="" disabled>Ubicación</option>
            <option value="new-york">New York</option>
            <option value="los-angeles">Los Angeles</option>
            <option value="chicago">Chicago</option>
            <!-- Añade más opciones según sea necesario -->
        </select>
        <button class="search-btn">Buscar</button>
    </div>
</section>


<section class="categories">
<h2>Explora por Categoría</h2>
    <div class="container">
        <div class="category-grid">
        <a href="#" class="category-item"><i class="material-icons">storefront</i>Marketing</a>
<a href="#" class="category-item"><i class="material-icons">support_agent</i>Servicio al Cliente</a>
<a href="#" class="category-item"><i class="material-icons">people</i>Recursos Humanos</a>
<a href="#" class="category-item"><i class="material-icons">engineering</i>Gestión de Proyectos</a>
<a href="#" class="category-item"><i class="material-icons">business</i>Desarrollo de Negocios</a>
<a href="#" class="category-item"><i class="material-icons">shopping_cart</i>Ventas y Comunicación</a>
<a href="#" class="category-item"><i class="material-icons">school</i>Enseñanza y Educación</a>
<a href="#" class="category-item"><i class="material-icons">palette</i>Diseño y Creatividad</a>

        </div>
    </div>
</section>



    <section class="about">
    <h2>Te ayudamos a conseguir el mejor trabajo y encontrar talento</h2>
        <div class="container">
            <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
            <ul>
                <li>Tempor erat elitr rebum at clita</li>
                <li>Aliqu diam amet diam et eos</li>
                <li>Clita duo justo magna dolore erat amet</li>
            </ul>
            <a href="#" class="btn">Leer Más</a>
        </div>
    </section>

  
<section class="jobs">
    <h2>Listado de Trabajos</h2>
    <div class="container">
        <div class="job-listing">
             <!-- Ejemplo 1 -->
             <div class="job-item">
                <div class="job-details">
                    <img src="../img/company1.png" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Desarrollador Web Backend</h3>
                        <p><span class="location">San Francisco, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$100,000 - $130,000</span></p>
                        <p class="date-line">Fecha Límite: 15 Julio, 2024</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <button class="btn show-details">Ver Detalles</button>
                        </div>
                        <div class="job-description">
                            <p>Responsable del desarrollo y mantenimiento de servidores y bases de datos. Implementación de lógica de negocio compleja y aseguramiento de la escalabilidad de las aplicaciones web.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 2 -->
            <div class="job-item">
                <div class="job-details">
                    <img src="../img/company2.png" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Ingeniero de Software de Sistemas Embebidos</h3>
                        <p><span class="location">Austin, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$110,000 - $140,000</span></p>
                        <p class="date-line">Fecha Límite: 1 Agosto, 2024</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <button class="btn show-details">Ver Detalles</button>
                        </div>
                        <div class="job-description">
                            <p>Diseño y desarrollo de firmware y software embebido para sistemas electrónicos. Experiencia en programación de bajo nivel y optimización de código para dispositivos integrados.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 3 -->
            <div class="job-item">
                <div class="job-details">
                    <img src="../img/company3.png" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Analista de Seguridad de la Información</h3>
                        <p><span class="location">Washington D.C., USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$100,000 - $130,000</span></p>
                        <p class="date-line">Fecha Límite: 25 Agosto, 2024</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <button class="btn show-details">Ver Detalles</button>
                        </div>
                        <div class="job-description">
                            <p>Protección de la infraestructura tecnológica de la organización contra amenazas cibernéticas. Implementación de políticas de seguridad, pruebas de penetración y respuesta a incidentes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 4 -->
            <div class="job-item">
                <div class="job-details">
                    <img src="../img/company4.png" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Desarrollador de Aplicaciones Móviles</h3>
                        <p><span class="location">Los Angeles, USA</span> <span class="separator">•</span> <span class="type">Contractual</span> <span class="separator">•</span> <span class="salary">Negociable</span></p>
                        <p class="date-line">Fecha Límite: 1 Septiembre, 2024</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <button class="btn show-details">Ver Detalles</button>
                        </div>
                        <div class="job-description">
                            <p>Diseño y desarrollo de aplicaciones móviles para plataformas iOS y Android. Optimización de rendimiento y experiencia de usuario. Colaboración con diseñadores para la creación de interfaces atractivas.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ejemplo 5 -->
            <div class="job-item">
                <div class="job-details">
                    <img src="../img/company5.png" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Científico de Datos</h3>
                        <p><span class="location">Chicago, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$120,000 - $150,000</span></p>
                        <p class="date-line">Fecha Límite: 10 Octubre, 2024</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <button class="btn show-details">Ver Detalles</button>
                        </div>
                        <div class="job-description">
                            <p>Análisis de grandes volúmenes de datos para la obtención de insights y la creación de modelos predictivos. Uso de herramientas avanzadas de análisis estadístico y machine learning para la toma de decisiones estratégicas.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

            <!-- Aquí van más elementos job-item -->
        </div>
    </div>
    <div class="view-more">
        <a href="#" class="btn">Ver más trabajos</a>
    </div>
</section>



    <section class="testimonials">
    <h2>Nuestros Clientes Dicen!!!</h2>
        <div class="container">
            <div class="testimonial-grid">
                <div class="testimonial-item">
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <h4>Nombre del Cliente</h4>
                    <p>Profesión</p>
                </div>
                <div class="testimonial-item">
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <h4>Nombre del Cliente</h4>
                    <p>Profesión</p>
                </div>
                <div class="testimonial-item">
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    <h4>Nombre del Cliente</h4>
                    <p>Profesión</p>
                </div>
            </div>
        </div>
    </section>

<!-- Modal -->
<div id="jobModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div id="jobDetails">
            <!-- Aquí se mostrará la información del trabajo -->
        </div>
    </div>
</div>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-item">
                    <h4>Compañía</h4>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Contáctenos</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h4>Enlaces Rápidos</h4>
                    <ul>
                        <li><a href="#">Acerca de Nosotros</a></li>
                        <li><a href="#">Contáctenos</a></li>
                        <li><a href="#">Nuestros Servicios</a></li>
                        <li><a href="#">Política de Privacidad</a></li>
                        <li><a href="#">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h4><i class="material-icons">contact_page</i> Contacto</h4>
                    <p><i class="material-icons">location_on</i> 123 Calle, New York, USA</p>
                    <p><i class="material-icons">call</i> +012 345 67890</p>
                    <p><i class="material-icons">mail</i> info@example.com</p>
                    <div class="social-links">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    </div>
                </div>
       

            </div>
        </div>
        <p class="copy">&copy; WorkHub, Todos los Derechos Reservados. IntelCode</p>

    </footer>


    <script>
 document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('jobModal');
    const jobItems = document.querySelectorAll('.job-item');
    const closeModal = modal.querySelector('.close');
    const jobDetails = modal.querySelector('#jobDetails');

    jobItems.forEach(item => {
        const showDetailsBtn = item.querySelector('.show-details');
        const jobDescription = item.querySelector('.job-description');

        showDetailsBtn.addEventListener('click', function() {
            const jobTitle = item.querySelector('h3').innerText;
            const jobLocation = item.querySelector('.location').innerText;
            const jobType = item.querySelector('.type').innerText;
            const jobSalary = item.querySelector('.salary').innerText;
            const jobDeadline = item.querySelector('.date-line').innerText;
            const description = jobDescription.innerHTML;

            jobDetails.innerHTML = `
                <h2>${jobTitle}</h2>
                <p><strong>Ubicación:</strong> ${jobLocation}</p>
                <p><strong>Tipo de Trabajo:</strong> ${jobType}</p>
                <p><strong>Salario:</strong> ${jobSalary}</p>
                <p><strong>Fecha Límite:</strong> ${jobDeadline}</p>
                <hr>
                <h3>Descripción del Trabajo:</h3>
                <p>${description}</p>
            `;

            modal.style.display = 'block';
        });
    });

    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
});

</script>

    <script src="https://kit.fontawesome.com/300db67d53.js" crossorigin="anonymous"></script>
</body>
</html>
