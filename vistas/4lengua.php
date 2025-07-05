<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje Cuarto Básico - Aprendiendo sin Lápiz ni Papel</title>
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

    <!-- Contenido Principal de la página de Lenguaje Cuarto Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Lenguaje - Cuarto Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Análisis de Textos (Idea Principal, Detalles) -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/analisis-textos-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF6347/FFFFFF?text=Analiza+Textos" class="card-img-top" alt="Imagen de Juego de Análisis de Textos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Analizando Textos Completos</h5>
                            <p class="card-text text-muted">Encuentra la idea principal y los detalles.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Uso de Puntos y Comas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/puntos-comas-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/1E90FF/FFFFFF?text=Puntuación" class="card-img-top" alt="Imagen de Juego de Puntos y Comas">
                        <div class="card-body text-center">
                            <h5 class="card-title">Puntos y Comas</h5>
                            <p class="card-text text-muted">¡Aprende a puntuar correctamente!</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Poesía y Rimas -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/poesia-rimas-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Poesía+y+Rimas" class="card-img-top" alt="Imagen de Juego de Poesía y Rimas">
                        <div class="card-body text-center">
                            <h5 class="card-title">El Mundo de la Poesía y las Rimas</h5>
                            <p class="card-text text-muted">Crea versos y encuentra palabras que riman.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Creación de Cuentos y Narraciones -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/creacion-cuentos-4-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Escribe+Cuentos" class="card-img-top" alt="Imagen de Juego de Creación de Cuentos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Inventa tus Propios Cuentos</h5>
                            <p class="card-text text-muted">¡Desarrolla tu creatividad escribiendo historias!</p>
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