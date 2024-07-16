<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkHub</title>
    <link rel="stylesheet" href="../css/estilobuscador.css">
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
                    <li><a href="#">Empleos</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                    <li>
                        <a href="#" class="icon">
                            <span class="material-icons">help_outline</span>
                        </a>
                    </li>
                    <li class="profile-menu">
    <a href="#" class="icon notification-icon-link" id="notification-icon">
        <span class="material-icons">notifications_none</span>
    </a>
    <div class="dropdown-menu" id="notification-menu">
        <a href="#">Notificación 1</a>
        <a href="#">Notificación 2</a>
        <a href="#">Notificación 3</a>
    </div>
</li>

                    <li class="profile-menu">
        <a href="#" class="icon profile-icon-link" id="profile-icon">
            <img src="../img/becario.png" alt="Perfil" class="profile-icon">
        </a>
        <div class="dropdown-menu" id="dropdown-menu">
            <a href="#">Ver perfil</a>
            <a href="plantillascv.php">Crear/Editar CV</a>
            <a href="#">Visualizar mi portafolio</a>
            <a href="#">Cerrar sesión</a>
        </div>
    </li>
                </ul>
            </nav>
        </div>
    </header>
 

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
    <section class="jobs">
    <h2>Listado de Trabajos</h2>
    <div class="container">
        <div class="job-listing">
            <div class="job-item">
                <div class="job-details">
                    <img src="ruta-a-la-imagen-de-la-empresa.jpg" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Marketing Manager</h3>
                        <p><span class="location">New York, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$123 - $456</span></p>
                        <p class="date-line">Date Line: 01 Jan, 2045</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <a href="formIniciarsesion.php" class="btn">Postularte Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-details">
                    <img src="ruta-a-la-imagen-de-la-empresa.jpg" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Marketing Manager</h3>
                        <p><span class="location">New York, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$123 - $456</span></p>
                        <p class="date-line">Date Line: 01 Jan, 2045</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <a href="formIniciarsesion.php" class="btn">Postularte Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-details">
                    <img src="ruta-a-la-imagen-de-la-empresa.jpg" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Marketing Manager</h3>
                        <p><span class="location">New York, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$123 - $456</span></p>
                        <p class="date-line">Date Line: 01 Jan, 2045</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <a href="formIniciarsesion.php" class="btn">Postularte Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-details">
                    <img src="ruta-a-la-imagen-de-la-empresa.jpg" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Marketing Manager</h3>
                        <p><span class="location">New York, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$123 - $456</span></p>
                        <p class="date-line">Date Line: 01 Jan, 2045</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <a href="formIniciarsesion.php" class="btn">Postularte Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="job-item">
                <div class="job-details">
                    <img src="ruta-a-la-imagen-de-la-empresa.jpg" alt="Logo de la empresa">
                    <div class="job-info">
                        <h3>Marketing Manager</h3>
                        <p><span class="location">New York, USA</span> <span class="separator">•</span> <span class="type">Full Time</span> <span class="separator">•</span> <span class="salary">$123 - $456</span></p>
                        <p class="date-line">Date Line: 01 Jan, 2045</p>
                        <div class="job-actions">
                            <button class="btn-like">❤ Guardar</button>
                            <a href="formIniciarsesion.php" class="btn">Postularte Ahora</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="view-more">
        <a href="#" class="btn">Ver más trabajos</a>
    </div>
</section>
    
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


    <script src="../JS/barradeiconos.js"></script>    
    <script src="https://kit.fontawesome.com/300db67d53.js" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>
