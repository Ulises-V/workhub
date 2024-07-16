<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "workhub";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}
?>