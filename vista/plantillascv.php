<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selector de Plantillas</title>
    <style>
        .template-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 20px auto;
        }
        .template-item {
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        .template-item img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h2>Selecciona una plantilla:</h2>
    <div class="template-container">
        <?php
        // Array de imágenes de ejemplo (puedes cambiar las rutas y agregar más imágenes)
        $images = array(
            "../img/plantillacv.png",
            "template2.jpg",
            "template3.jpg"
        );

        // Mostrar cada imagen como un item seleccionable
        foreach ($images as $image) {
            echo '<div class="template-item" onclick="redirect(\'' . $image . '\')">';
            echo '<img src="' . $image . '" alt="Plantilla">';
            echo '</div>';
        }
        ?>
    </div>
    <script>
        function redirect(image) {
            // Puedes redirigir a una página específica dependiendo de la imagen seleccionada
            if (image === "../img/plantillacv.png") {
                window.location.href = "vistacv.php"; // Ejemplo de redirección a pagina1.php
            } else if (image === "template2.jpg") {
                window.location.href = "pagina2.php"; // Ejemplo de redirección a pagina2.php
            } else if (image === "template3.jpg") {
                window.location.href = "pagina3.php"; // Ejemplo de redirección a pagina3.php
            } else {
                // Redirección predeterminada o manejo de otros casos
                console.log("Imagen no reconocida");
            }
        }
    </script>
</body>
</html>
