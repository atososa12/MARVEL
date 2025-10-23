<?php
$host = "127.0.0.1"; //  localhost
$user = "root";       // usuario por defecto de Laragon
$pass = "";           // contraseña por defecto 
$db   = "formulario"; // nombre de la base de datos

// Crear conexión
$conex = mysqli_connect($host, $user, $pass, $db);

// Revisar conexión
if (!$conex) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
