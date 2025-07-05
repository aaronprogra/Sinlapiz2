<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje Tercero Básico - Aprendiendo sin Lápiz ni Papel</title>
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

    <!-- Contenido Principal de la página de Lenguaje Tercero Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Lenguaje - Tercero Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Tipos de Texto (Narrativo, Expositivo) -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/tipos-texto-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF6347/FFFFFF?text=Tipos+de+Texto" class="card-img-top" alt="Imagen de Juego de Tipos de Texto">
                        <div class="card-body text-center">
                            <h5 class="card-title">Explora los Tipos de Texto</h5>
                            <p class="card-text text-muted">¡Distingue entre cuentos y noticias!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Ortografía Básica (C, Z, S) -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/ortografia-basica-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/1E90FF/FFFFFF?text=Ortografía" class="card-img-top" alt="Imagen de Juego de Ortografía">
                        <div class="card-body text-center">
                            <h5 class="card-title">Mejora tu Ortografía</h5>
                            <p class="card-text text-muted">Practica las reglas básicas.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Verbos y Tiempos Verbales -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/verbos-tiempos-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Verbos" class="card-img-top" alt="Imagen de Juego de Verbos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Los Verbos y sus Tiempos</h5>
                            <p class="card-text text-muted">¡Aprende sobre acciones y cuándo ocurren!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Producción de Textos Cortos -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/produccion-textos-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Escribe+Historias" class="card-img-top" alt="Imagen de Juego de Producción de Textos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Crea tus Propios Textos</h5>
                            <p class="card-text text-muted">¡Empieza a escribir tus ideas!</p>
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