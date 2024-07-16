<?php

include "../modelo/conexion-bd.php";

class Becario
{
    private $nombre;
    private $correo;
    private $contrasena;
    private $universidad;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function Inicializar($nombre, $correo, $contrasena, $universidad)
    {
        $this->nombre = $nombre;
        $this->correo = $correo;
        $this->contrasena = $contrasena;
        $this->universidad = $universidad;
    }

    public function registrarBecario()
    {
        $stmt = $this->conn->prepare("INSERT INTO becarios(nombre, correo, contrasena, universidad) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nombre, $this->correo, $this->contrasena, $this->universidad);

        if ($stmt->execute()) {

            header("Location: ../vista/formulario-becario.php");
            exit;
        } else {
            return "Error al registrar el becario: " . $stmt->error;
        }

        $stmt->close();
    }

    public function iniciarSesion($correo, $contrasena) {
        
        $stmt = $this->conn->prepare("SELECT * FROM becarios WHERE correo=? AND contrasena=?");
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        $registro = $stmt->get_result();

        if ($registro->num_rows > 0) {

         
            
            header("Location: ../vista/buscadorempresas.php");
            exit; 
        } else {
            
            die("<h3>Correo incorrecto o contraseña incorrecta</h3>");
        }
    }

}