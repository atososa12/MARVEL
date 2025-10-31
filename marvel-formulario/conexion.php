<?php
// Datos de conexión
$servername = "localhost";
$username   = "root";       
$password   = "";           
$dbname     = "formulario_marvel";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Revisar conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
