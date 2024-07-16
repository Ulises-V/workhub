<?php
include "../modelo/conexion-bd.php";
include "../modelo/Becario.php";

$becario = new Becario($conn); 

if (isset($_POST['Registrar'])) {
    $becario->Inicializar($_POST['nombre'], $_POST['correo'], $_POST['contrasena'], $_POST['universidad']);
    echo $becario->registrarBecario(); 
}

if (isset($_POST['Iniciar'])) {
    $correo = $_POST['correo']; 
    $contrasena = $_POST['contrasena']; 
    $becario->iniciarSesion($correo, $contrasena);
}


?>