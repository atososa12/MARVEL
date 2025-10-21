<?php
include("conexion.php");

if (isset($_POST['send'])) {
    if (
        strlen($_POST['Nombre']) >= 1 &&
        strlen($_POST['Email']) >= 1 &&
        strlen($_POST['Asunto']) >= 1 &&
        strlen($_POST['Mensaje']) >= 1
    ) {
        $nombre = trim($_POST['Nombre']);
        $email = trim($_POST['Email']);
        $asunto = trim($_POST['Asunto']);
        $mensaje = trim($_POST['Mensaje']);
        $fecha   = date("Y-m-d");

        $insertar = "INSERT INTO datos (nombre, email, asunto, mensaje, fecha) 
                     VALUES ('$nombre', '$email', '$asunto', '$mensaje', '$fecha')";
        
        $resultado = mysqli_query($conex, $insertar);

        if (!$resultado) {
            echo '<h3 class="bad">¡Ups, ha ocurrido un error!</h3>';
        } else {
            echo '<h3 class="ok">¡Mensaje enviado correctamente!</h3>';
        }
    } else {
        echo '<h3 class="bad">¡Por favor, completa todos los campos!</h3>';
    }
}
?>
