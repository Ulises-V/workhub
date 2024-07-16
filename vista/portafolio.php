<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- --------- UNICONS ---------- -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <!-- --------- CSS ---------- -->
    <link rel="stylesheet" href="../css/estiloportafolio.css">

    <!-- --------- FAVICON ---------- -->
    <link rel="shortcut icon" href="Workhub.png" type="image/x-icon">

    <title>Portafolio | Archivaldo</title>
</head>
<body>
   <div class="container">
    <!-- --------------- HEADER --------------- -->
      <nav id="header">
        <div class="nav-logo">
            <p class="nav-name">WorkHub </p>    <span></span>
        </div>
        <div class="nav-menu" id="myNavMenu">
            <ul class="nav_menu_list">
                <li class="nav_list">
                    <a href="buscadorempresas.php" class="nav-link active-link">Inicio</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#about" class="nav-link">Información</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#projects" class="nav-link">Proyectos</a>
                    <div class="circle"></div>
                </li>
                <li class="nav_list">
                    <a href="#contact" class="nav-link">Contáctame</a>
                    <div class="circle"></div>
                </li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn">Descargar CV <i class="uil uil-file-alt"></i></button>
        </div>
        <div class="nav-menu-btn">
            <i class="uil uil-bars" onclick="myMenuFunction()"></i>
        </div>
      </nav>

    <!-- -------------- MAIN ---------------- -->
    <main class="wrapper">
       <!-- -------------- SEARCH BOX ---------------- -->
       <section class="search-box" id="search">
          <div class="search-header">
            <h1>Buscar Becarios</h1>
            <input type="text" id="searchInput" placeholder="Buscar por nombre o tipo de beca...">
            <button class="btn" onclick="searchBecarios()">Buscar <i class="uil uil-search"></i></button>
          </div>
          <div class="search-results" id="searchResults">
            <!-- Aquí se mostrarán los resultados de la búsqueda -->
          </div>
       </section>

       <!-- -------------- FEATURED BOX ---------------- -->
       <section class="featured-box" id="home">
          <div class="featured-text">
            <div class="featured-text-card">
                <span>Archivaldo Perez</span>
            </div>
            <div class="featured-name">
                <p>Soy <span class="typedText"></span></p>
            </div>
            <div class="featured-text-info">
                <p>Desarrollador de frontend experimentado con pasión por crear sitios web visualmente impresionantes y fáciles de usar.
                </p>
            </div>
            <div class="featured-text-btn">
                <button class="btn blue-btn">Contrátame</button>
                <button class="btn">Descargar CV <i class="uil uil-file-alt"></i></button>
            </div>
            <div class="social_icons">
                <div class="icon"><i class="uil uil-instagram"></i></div>
                <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
                <div class="icon"><i class="uil uil-dribbble"></i></div>
                <div class="icon"><i class="uil uil-github-alt"></i></div>
            </div>
          </div>
          <div class="featured-image">
            <div class="image">
                <img src="../img/foto.jpeg" alt="avatar">
            </div>
          </div>
          <div class="scroll-icon-box">
            <a href="#about" class="scroll-btn">
                <i class="uil uil-mouse-alt"></i>
                <p>Scroll Down</p>
            </a>
          </div>
       </section>

       <!-- -------------- ABOUT BOX ---------------- -->
       <section class="section" id="about">
          <div class="top-header">
            <h1>Sobre mí</h1>
          </div>
          <div class="row">
            <div class="col">
                <div class="about-info">
                    <h3>Mi introducción</h3>
                    <p>Soy experto en HTML, CSS y JavaScript, así como en otros marcos y bibliotecas de vanguardia, lo que me permite implementar funciones interactivas. Además, tengo experiencia trabajando con sistemas de gestión de contenido (CMS) como WordPress.
                    </p>
                    <div class="about-btn">
                        <button class="btn">Descargar CV <i class="uil uil-import"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Frontend</h3>
                    </div>
                    <div class="skills-list">
                        <span>HTML</span>
                        <span>CSS</span>
                        <span>Bootstrap</span>
                        <span>JavaScript</span>
                        <span>Vue</span>
                        <span>React</span>
                        <span>Angular</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Backend</h3>
                    </div>
                    <div class="skills-list">
                        <span>PHP</span>
                        <span>JAVA</span>
                        <span>Python</span>
                        <span>C++</span>
                    </div>
                </div>
                <div class="skills-box">
                    <div class="skills-header">
                        <h3>Database</h3>
                    </div>
                    <div class="skills-list">
                        <span>MySQL</span>
                        <span>PostgreSQL</span>
                        <span>MongoDB</span>
                    </div>
                </div>
            </div>
          </div>
       </section>

       <!-- -------------- PROJECT BOX ---------------- -->
       <section class="section" id="projects">
          <div class="top-header">
              <h1>Proyectos</h1>
          </div>
          <div class="project-container">
            <div class="project-box">
                <i class="uil uil-briefcase-alt"></i>
                <h3>Completados</h3>
                <label>15+ Proyectos terminados</label>
            </div>
            <div class="project-box">
                <i class="uil uil-users-alt"></i>
                <h3>Clientes</h3>
                <label>25+ Clientes felices</label>
            </div>
            <div class="project-box">
                <i class="uil uil-award"></i>
                <h3>Experiencia</h3>
                <label>7+ Años en el campo</label>
            </div>
          </div>
       </section>

       <!-- -------------- CONTACT BOX ---------------- -->
       <section class="section" id="contact">
          <div class="top-header">
            <h1>Ponte en contacto</h1>
            <span>¿Tienes un proyecto en mente? Contáctame aquí</span>
          </div>
          <div class="row">
             <div class="col">
                <div class="contact-info">
                    <h2>Encuéntrame <i class="uil uil-corner-right-down"></i></h2>
                    <p><i class="uil uil-envelope"></i> Email: john@doe.com</p>
                    <p><i class="uil uil-phone"></i> Tel: +250 708 770 000</p>
                </div>
             </div>
             <div class="col">
                <div class="form-control">
                    <div class="form-inputs">
                        <input type="text" class="input-field" placeholder="Nombre">
                        <input type="text" class="input-field" placeholder="Email">
                    </div>
                    <div class="text-area">
                        <textarea placeholder="Mensaje"></textarea>
                    </div>
                    <div class="form-button">
                        <button class="btn">Enviar <i class="uil uil-message"></i></button>
                    </div>
                </div>
             </div>
          </div>
       </section>
    </main>

    <!-- --------------- FOOTER --------------- -->
    <footer>
        <div class="top-footer">
            <p>John Doe.</p>
        </div>
        <div class="middle-footer">
            <ul class="footer-menu">
                <li class="footer_menu_list">
                    <a href="#home">Inicio</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#about">Sobre mí</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#projects">Proyectos</a>
                </li>
                <li class="footer_menu_list">
                    <a href="#contact">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="footer-social-icons">
            <div class="icon"><i class="uil uil-instagram"></i></div>
            <div class="icon"><i class="uil uil-linkedin-alt"></i></div>
            <div class="icon"><i class="uil uil-dribbble"></i></div>
            <div class="icon"><i class="uil uil-github-alt"></i></div>
        </div>
        <div class="bottom-footer">
            <p>Copyright &copy; <a href="#home" style="text-decoration: none;">John Doe</a> - Todos los derechos reservados</p>
        </div>
    </footer>

    </div>

    <!-- ----- TYPING JS Link ----- -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- ----- SCROLL REVEAL JS Link----- -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- ----- MAIN JS ----- -->
    <script src="../JS/portafolio.js"></script>
</body>
</html>
