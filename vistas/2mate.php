<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas Segundo Básico - Aprendiendo sin Lápiz ni Papel</title>
    <!-- Enlace a Bootstrap CSS para un diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la fuente Lobster de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para colores y diseño (usa el mismo styles.css) -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include 'nav.php'; ?>

    <!-- Contenido Principal de la página de Matemáticas Segundo Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Matemáticas - Segundo Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Multiplicaciones Básicas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/multiplicaciones-basicas-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/8A2BE2/FFFFFF?text=Tablas+de+Multiplicar" class="card-img-top" alt="Imagen de Multiplicaciones Básicas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Tablas de Multiplicar</h5>
                            <p class="card-text text-muted">¡Aprende y practica las tablas!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Restas con Reserva -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/restas-con-reserva-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Restas+Difíciles" class="card-img-top" alt="Imagen de Restas con Reserva">
                        <div class="card-body text-center">
                            <h5 class="card-title">Restas con Reserva</h5>
                            <p class="card-text text-muted">Domina las restas con dificultad.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Series Numéricas y Patrones -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/series-numericas-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Patrones+Numéricos" class="card-img-top" alt="Imagen de Series Numéricas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Series y Patrones Numéricos</h5>
                            <p class="card-text text-muted">¡Descubre las reglas de las secuencias!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Introducción a las Divisiones -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/introduccion-division-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF4500/FFFFFF?text=Aprende+a+Dividir" class="card-img-top" alt="Imagen de Introducción a Divisiones">
                        <div class="card-body text-center">
                            <h5 class="card-title">Primeras Divisiones</h5>
                            <p class="card-text text-muted">¡Comparte y agrupa elementos!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->

        </div>

       <?php include 'back.php' ?>
<?php include 'modalSesion.php';  ?>
</body>
</html>