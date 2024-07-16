   // Función para mostrar el contenido modal y ocultar el contenedor principal
   document.querySelectorAll('.btn-login').forEach(btn => {
    btn.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.container').style.display = 'none';
        document.getElementById('modal-content').style.display = 'flex';
    });
});

// Función para cerrar la ventana modal y mostrar de nuevo el contenedor principal
document.getElementById('btn-close').addEventListener('click', function() {
    document.querySelector('.container').style.display = 'flex';
    document.getElementById('modal-content').style.display = 'none';
});