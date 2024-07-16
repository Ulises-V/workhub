<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Plantillas</title>
    <link rel="stylesheet" href="../css/estilosselectorplantillas.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        .search-container {
            text-align: center;
            margin: 20px 0;
        }
        .template-item {
            text-align: center;
            margin-bottom: 20px;
        }
        .template-item img {
            max-width: 100%;
            height: auto;
        }
        .template-name {
            font-size: 1rem;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
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
<!-- Barra de búsqueda -->
<div class="search-container">
    <input type="text" id="searchInput" onkeyup="filterTemplates()" placeholder="Buscar plantillas..." />
</div>

<!-- Contenedor de plantillas -->
<div class="template-container" id="templateContainer">
    <?php
    // Array de imágenes y nombres de ejemplo (puedes cambiar las rutas y agregar más imágenes)
    $templates = array(
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 1"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 2"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 3"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 4"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 5"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 6"),
        array("img" => "../img/plantillacv.png", "name" => "Plantilla 7"),
    );

    // Mostrar cada imagen como un item seleccionable
    foreach ($templates as $index => $template) {
        echo '<div class="template-item" onclick="openModal(' . $index . ')">';
        echo '<img src="' . $template['img'] . '" alt="Plantilla">';
        echo '<div class="template-name">' . $template['name'] . '</div>';
        echo '</div>';
    }
    ?>
</div>

<!-- El modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="template-preview">
            <img id="modalImage" src="" alt="Previsualización de la plantilla">
        </div>
        <button id="useTemplateBtn">Usar esta plantilla</button>
        <a class="prev" onclick="changeTemplate(-1)">&#10094;</a>
        <a class="next" onclick="changeTemplate(1)">&#10095;</a>
    </div>
</div>

<script>
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    var modalImage = document.getElementById("modalImage");
    var useTemplateBtn = document.getElementById("useTemplateBtn");
    var currentTemplateIndex = 0;
    var templates = <?php echo json_encode($templates); ?>;

    function openModal(index) {
        currentTemplateIndex = index;
        modal.style.display = "flex";
        modalImage.src = templates[currentTemplateIndex].img;

        useTemplateBtn.onclick = function() {
            redirect(templates[currentTemplateIndex].img);
        }
    }

    function changeTemplate(direction) {
        currentTemplateIndex += direction;
        if (currentTemplateIndex < 0) {
            currentTemplateIndex = templates.length - 1;
        } else if (currentTemplateIndex >= templates.length) {
            currentTemplateIndex = 0;
        }
        modalImage.src = templates[currentTemplateIndex].img;
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    function redirect(image) {
        if (image === "../img/plantillacv.png") {
            window.location.href = "vistacv.php";
        } else {
            console.log("Imagen no reconocida");
        }
    }

    function filterTemplates() {
        var input = document.getElementById('searchInput');
        var filter = input.value.toLowerCase();
        var container = document.getElementById('templateContainer');
        var templates = container.getElementsByClassName('template-item');

        for (var i = 0; i < templates.length; i++) {
            var name = templates[i].getElementsByClassName('template-name')[0].innerText;
            if (name.toLowerCase().indexOf(filter) > -1) {
                templates[i].style.display = "";
            } else {
                templates[i].style.display = "none";
            }
        }
    }
</script>
<script src="../JS/barradeiconos.js"></script>   
</body>
</html>
