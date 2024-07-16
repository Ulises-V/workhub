<?php

include "../modelo/conexion-bd.php";

class Empresa
{
    private $nombreE;
    private $correoE;
    private $contrasenaE;
    private $ubicacion;
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function Inicializar($nombreE, $correoE, $contrasenaE, $ubicacion)
    {
        $this->nombreE = $nombreE;
        $this->correoE = $correoE;
        $this->contrasenaE = $contrasenaE;
        $this->ubicacion = $ubicacion;
    }

    public function registrarEmpresa()
    {
        $stmt = $this->conn->prepare("INSERT INTO empresas(nombre_empresa, correo, contrasena, ubicacion) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $this->nombreE, $this->correoE, $this->contrasenaE, $this->ubicacion);

        if ($stmt->execute()) {

            header("Location: ../vista/formulario-empresa.php");
            exit;
        } else {
            return "Error al registrar empresa: " . $stmt->error;
        }

        $stmt->close();
    }

    public function iniciarSesion($correo, $contrasena) {
        
        $stmt = $this->conn->prepare("SELECT * FROM empresas WHERE correo=? AND contrasena=?");
        $stmt->bind_param("ss", $correo, $contrasena);
        $stmt->execute();
        $registro = $stmt->get_result();

        if ($registro->num_rows > 0) {

            header("Location: ../vista/buscadorbecarios.php");
            exit; 
        } else {
            
            die("<h3>Correo incorrecto o contraseña incorrecta</h3>");
        }
    }
}