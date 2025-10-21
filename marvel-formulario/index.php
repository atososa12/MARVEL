<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Antonella Sosa y Vanessa Rinaldi">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="style.css" rel="stylesheet">
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
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Tu email" required>
            </div>

            <div class="mb-3">
                <label for="Asunto" class="form-label fw-bold">Asunto</label>
                <input type="text" class="form-control" id="Asunto" name="Asunto" placeholder="Motivo de contacto" required>
            </div>
            
            <div class="mb-3">
                <label for="mensaje" class="form-label fw-bold">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escribí tu mensaje..." rows="5" required></textarea>
            </div>

            <button type="submit" class="btn btn-danger w-100 fw-bold">Enviar</button>
        </form>

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
