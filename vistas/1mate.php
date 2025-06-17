<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas Primero Básico - Aprendiendo sin Lápiz ni Papel</title>
    <!-- Enlace a Bootstrap CSS para un diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la fuente Lobster de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para colores y diseño -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
<?php include 'nav.php'; ?>
    <!-- Contenido Principal de la página de Matemáticas Primero Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Matemáticas - Primero Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Sumas Básicas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/juego-de-sumas-para-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Juego+de+Sumas" class="card-img-top" alt="Imagen de Juego de Sumas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Juego de Sumas Básicas</h5>
                            <p class="card-text text-muted">¡Practica sumas de forma divertida!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Conteo de Números -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/conteo-numeros-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF4500/FFFFFF?text=Contar+Números" class="card-img-top" alt="Imagen de Conteo de Números">
                        <div class="card-body text-center">
                            <h5 class="card-title">Contando Números hasta 20</h5>
                            <p class="card-text text-muted">Aprende a contar con imágenes.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Reconocimiento de Formas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/formas-geometricas-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/1E90FF/FFFFFF?text=Formas+Geométricas" class="card-img-top" alt="Imagen de Reconocimiento de Formas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Reconoce Formas Geométricas</h5>
                            <p class="card-text text-muted">¡Identifica cuadrados, círculos y más!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Problemas Simples -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/problemas-matematicos-1-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Problemas+Fáciles" class="card-img-top" alt="Imagen de Problemas Simples">
                        <div class="card-body text-center">
                            <h5 class="card-title">Resuelve Problemas Sencillos</h5>
                            <p class="card-text text-muted">Primeros pasos en la lógica matemática.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->

        </div>

        <!-- Botón para Volver al Inicio -->
        <div class="text-center back-button">
            <a href='../index.php'  class="btn btn-primary-custom btn-lg rounded-pill px-5 py-3 interactive-button">
                <i class="fas fa-arrow-left me-2"></i> Volver al Inicio
            </a>
        </div>
    </div>

    <?php include 'modalSesion.php' ?>
</body>
</html>