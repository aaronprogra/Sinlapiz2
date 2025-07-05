<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lenguaje Segundo Básico - Aprendiendo sin Lápiz ni Papel</title>
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

    <!-- Contenido Principal de la página de Lenguaje Segundo Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Lenguaje - Segundo Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Oraciones Simples -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/oraciones-simples-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FF6347/FFFFFF?text=Arma+Oraciones" class="card-img-top" alt="Imagen de Juego de Oraciones Simples">
                        <div class="card-body text-center">
                            <h5 class="card-title">¡Crea Oraciones Simples!</h5>
                            <p class="card-text text-muted">Organiza palabras para formar frases.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 2: Uso de Sustantivos y Adjetivos -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/sustantivos-adjetivos-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/1E90FF/FFFFFF?text=Sustantivos+y+Adjetivos" class="card-img-top" alt="Imagen de Juego de Sustantivos y Adjetivos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sustantivos y Adjetivos</h5>
                            <p class="card-text text-muted">Identifica nombres y cualidades.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 3: Comprensión Lectora Básica -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/comprension-lectora-basica-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/32CD32/FFFFFF?text=Comprensión+Lectora" class="card-img-top" alt="Imagen de Juego de Comprensión Lectora">
                        <div class="card-body text-center">
                            <h5 class="card-title">Lee y Entiende Historias</h5>
                            <p class="card-text text-muted">Responde preguntas sobre cuentos.</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Ejemplo de Juego 4: Sinónimos y Antónimos -->
            <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                <div class="card game-card flex-fill">
                    <a href="https://wordwall.net/es-cl/community/sinonimos-antonimos-2-basico" target="_blank" rel="noopener noreferrer">
                        <img src="https://placehold.co/400x180/FFD700/000000?text=Palabras+Similares" class="card-img-top" alt="Imagen de Juego de Sinónimos y Antónimos">
                        <div class="card-body text-center">
                            <h5 class="card-title">Sinónimos y Antónimos</h5>
                            <p class="card-text text-muted">Encuentra palabras con significado igual o contrario.</p>
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