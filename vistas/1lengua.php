<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje Primero Básico - Aprendiendo sin Lápiz ni Papel</title>
    <!-- Enlace a Bootstrap CSS para un diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la fuente Lobster de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para colores y diseño (usa el mismo styles.css) -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Los estilos específicos de esta página se han movido a styles.css -->
</head>
<body>
<?php include 'nav.php'; ?>
  <!-- Contenido Principal de la página de Lenguaje Primero Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Lenguaje - Primero Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Reconocimiento de Vocales -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/reconocimiento-vocales-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF6347/FFFFFF?text=Vocales" class="card-img-top" alt="Imagen de Juego de Vocales">
                        <div class="card-body text-center">
                            <h5 class="card-title">¡Descubre las Vocales!</h5>
                            <p class="card-text text-muted">Aprende y practica las 5 vocales.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Formación de Sílabas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/formacion-silabas-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/1E90FF/FFFFFF?text=Forma+Sílabas" class="card-img-top" alt="Imagen de Juego de Sílabas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Arma Palabras con Sílabas</h5>
                            <p class="card-text text-muted">Combina letras y forma sílabas.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Reconocimiento de Letras Mayúsculas y Minúsculas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/letras-mayusculas-minusculas-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Mayúsculas+y+Minúsculas" class="card-img-top" alt="Imagen de Juego de Mayúsculas y Minúsculas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mayúsculas y Minúsculas</h5>
                            <p class="card-text text-muted">¡Distingue entre ellas!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Lectura de Palabras Cortas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/lectura-palabras-cortas-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Lee+Palabras" class="card-img-top" alt="Imagen de Juego de Lectura">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lee tus Primeras Palabras</h5>
                            <p class="card-text text-muted">Aprende a leer de forma divertida.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->

        </div>

        <!-- Botón para Volver al Inicio -->
        <div class="text-center back-button">
            <a href="index.html" class="btn btn-primary-custom btn-lg rounded-pill px-5 py-3 interactive-button">
                <i class="fas fa-arrow-left me-2"></i> Volver al Inicio
            </a>
        </div>
    </div>

   <?php include 'modalSesion.php' ?>
</body>
</html>