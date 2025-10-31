<?php
include("conexion.php");

// Inicio variables 
$nombre = "";
$email = "";
$mensaje = "";
$Asunto = "";
$mensaje_alert = "";

if (isset($_POST['send'])) {
    if (
        strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['mensaje']) >= 1
    ) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $Asunto = trim($_POST['Asunto']);
        $mensaje_completo = "Asunto: $Asunto\nMensaje: " . trim($_POST['mensaje']);

        $insertar = "INSERT INTO mensajes (nombre, email, mensaje) 
                     VALUES ('$nombre', '$email', '$mensaje_completo')";

        $resultado = mysqli_query($conn, $insertar);

        if (!$resultado) {
            $mensaje_alert = '<h3 class="bad text-center mt-3 text-danger">¡Ups, ha ocurrido un error!</h3>';
        } else {
            $mensaje_alert = '<h3 class="ok text-center mt-3 text-success">¡Mensaje enviado correctamente!</h3>';
            $nombre = $email = $mensaje = $Asunto = "";
        }
    } else {
        $mensaje_alert = '<h3 class="bad text-center mt-3 text-warning">¡Por favor, completá todos los campos!</h3>';
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonella Sosa y Vanessa Rinaldi">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="./css/style.css" rel="stylesheet">
    <title>Contacto</title>
</head>
<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotras</a>
            <div class="dropdown">
                <button class="dropbtn">Servicios</button>
                <div class="dropdown-content">
                    <a href="servicios.html#Carrusel">Bienvenidos</a>
                    <a href="servicios.html#Personajes">Personajes</a>
                    <a href="servicios.html#Linea">Linea del tiempo</a>
                </div>
            </div>
            <a href="trivia.html">Trivia</a>
            <a href="index.php">Contacto</a>
        </nav>
    </header>

    <main class="container my-5">
        <h1 class="text-center text-danger mb-4">Contacto</h1>

        <p class="text-center mb-4">
            ¿Querés dejarnos un mensaje? Este es un sitio de fans hecho con mucho cariño, así que si tenés una recomendación, sugerencia o simplemente querés contarnos cuál es tu superhéroe favorito, podés escribirnos.
        </p>

        <form method="post" class="mx-auto" style="max-width: 600px;">
            <div class="mb-3">
                <label for="nombre" class="form-label fw-bold">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required value="<?php echo $nombre; ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Tu email" required value="<?php echo $email; ?>">
            </div>

            <div class="mb-3">
                <label for="Asunto" class="form-label fw-bold">Asunto</label>
                <input type="text" class="form-control" id="Asunto" name="Asunto" placeholder="Motivo de contacto" value="<?php echo $Asunto; ?>">
            </div>
            
            <div class="mb-3">
                <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribí tu mensaje..." rows="5" required><?php echo $mensaje; ?></textarea>
            </div>

            <button type="submit" name="send" class="btn btn-danger w-100 fw-bold">Enviar</button>
        </form>

        <!-- Mensaje de confirmación/error -->
        <?php
        if($mensaje_alert != ""){
            echo $mensaje_alert;
        }
        ?>

        <div class="text-center mt-4 text-secondary">
            contacto@marvelfans.com <br>
            Montevideo, Uruguay
            <p class="fst-italic mt-2">Si sos de S.H.I.E.L.D., mandanos un mensaje codificado.</p>
        </div>
    </main>

    <footer>
        <p>© 2025 - Marvel Fan Web creada por Vanessa Rinaldi y Antonella Sosa - Diseño web</p>
        <nav class="footer-nav">
            <a href="index.html">Inicio</a>
            <a href="nosotros.html">Nosotras</a>
            <a href="servicios.html">Servicios</a>
            <a href="trivia.html">Trivia</a>
            <a href="index.php">Contacto</a>
        </nav>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://x.com/" target="_blank"><i class="fab fa-x-twitter"></i></a>
        </div>
    </footer>
</body>
</html>
