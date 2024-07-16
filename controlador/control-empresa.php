<?php
include "../modelo/conexion-bd.php";
include "../modelo/Empresa.php";

$empresa = new Empresa($conn); 

if (isset($_POST['Registrar'])) {
    $empresa->Inicializar($_POST['nombreE'], $_POST['correoE'], $_POST['contrasenaE'], $_POST['ubicacion']);
    echo $empresa->registrarEmpresa();
}

if (isset($_POST['Iniciar'])) {
    $correo = $_POST['correo']; 
    $contrasena = $_POST['contrasena']; 
    $empresa->iniciarSesion($correo, $contrasena);
}
?>