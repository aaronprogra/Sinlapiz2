<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matemáticas Cuarto Básico - Aprendiendo sin Lápiz ni Papel</title>
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
    <!-- Contenido Principal de la página de Matemáticas Cuarto Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Matemáticas - Cuarto Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Números Decimales -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/numeros-decimales-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/8A2BE2/FFFFFF?text=Decimales" class="card-img-top" alt="Imagen de Números Decimales">
                        <div class="card-body text-center">
                            <h5 class="card-title">Aprende sobre Números Decimales</h5>
                            <p class="card-text text-muted">¡Comprende las partes de un todo!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Operaciones Combinadas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/operaciones-combinadas-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Operaciones+Variadas" class="card-img-top" alt="Imagen de Operaciones Combinadas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Resuelve Operaciones Combinadas</h5>
                            <p class="card-text text-muted">¡Sigue el orden de las operaciones!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Gráficos y Tablas de Datos -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/graficos-tablas-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Análisis+de+Datos" class="card-img-top" alt="Imagen de Gráficos y Tablas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Interpretando Gráficos y Tablas</h5>
                            <p class="card-text text-muted">¡Analiza la información de forma visual!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Medidas de Longitud y Masa -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/medidas-longitud-masa-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF4500/FFFFFF?text=Unidades+de+Medida" class="card-img-top" alt="Imagen de Medidas de Longitud y Masa">
                        <div class="card-body text-center">
                            <h5 class="card-title">Medidas de Longitud y Masa</h5>
                            <p class="card-text text-muted">Aprende a medir con precisión.</p>
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