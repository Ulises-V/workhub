     // Función para alternar la visibilidad del menú deslizante
     function toggleMenu(menuId) {
        var menu = document.getElementById(menuId);
        if (menu.style.display === 'none' || menu.style.display === '') {
            menu.style.display = 'block';
        } else {
            menu.style.display = 'none';
        }
    }

    // Evento para mostrar/ocultar menú de perfil
    document.getElementById('profile-icon').addEventListener('click', function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
        hideOtherMenus('dropdown-menu');
        toggleMenu('dropdown-menu');
    });

    // Evento para mostrar/ocultar menú de notificaciones
    document.getElementById('notification-icon').addEventListener('click', function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
        hideOtherMenus('notification-menu');
        toggleMenu('notification-menu');
    });

    // Función para ocultar todos los menús excepto el que se está abriendo
    function hideOtherMenus(menuIdToKeepOpen) {
        var allMenus = document.querySelectorAll('.dropdown-menu');
        allMenus.forEach(function(menu) {
            if (menu.id !== menuIdToKeepOpen) {
                menu.style.display = 'none';
            }
        });
    }


    