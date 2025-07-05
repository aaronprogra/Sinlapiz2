<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas Tercero Básico - Aprendiendo sin Lápiz ni Papel</title>
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
    <!-- Contenido Principal de la página de Matemáticas Tercero Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Matemáticas - Tercero Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Divisiones y Fracciones -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/divisiones-fracciones-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/8A2BE2/FFFFFF?text=Divisiones+Fáciles" class="card-img-top" alt="Imagen de Divisiones y Fracciones">
                        <div class="card-body text-center">
                            <h5 class="card-title">Dominando Divisiones y Fracciones</h5>
                            <p class="card-text text-muted">¡Reparte y entiende las partes!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Geometría Básica -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/geometria-basica-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Geometría+Divertida" class="card-img-top" alt="Imagen de Geometría Básica">
                        <div class="card-body text-center">
                            <h5 class="card-title">Figuras y Cuerpos Geométricos</h5>
                            <p class="card-text text-muted">Explora el mundo de las formas.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Perímetro y Área -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/perimetro-area-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Cálculo+de+Áreas" class="card-img-top" alt="Imagen de Perímetro y Área">
                        <div class="card-body text-center">
                            <h5 class="card-title">Calculando Perímetro y Área</h5>
                            <p class="card-text text-muted">Mide los contornos y las superficies.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Problemas de Razonamiento -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/problemas-razonamiento-3-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF4500/FFFFFF?text=Lógica+Matemática" class="card-img-top" alt="Imagen de Problemas de Razonamiento">
                        <div class="card-body text-center">
                            <h5 class="card-title">Desafíos de Razonamiento Lógico</h5>
                            <p class="card-text text-muted">¡Piensa y resuelve problemas!</p>
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