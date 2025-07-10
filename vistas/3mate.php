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
    <link rel="stylesheet" href="../css/juegos_styles.css">
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
            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->
            <!-- Sección para mostrar los juegos agregados dinámicamente -->
        <h3 class="text-center text-info-custom mb-4">Juegos Agregados</h3>
        <div class="row justify-content-center" id="gamesList3">
            <!-- Los juegos agregados se insertarán aquí por JavaScript -->
            <p class="text-center text-muted" id="noGamesMessage">No hay juegos agregados aún. ¡Usa el formulario de arriba!</p>
        </div>

            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->

        </div>
<script src="../js/juegos_script.js"></script>
<?php include 'back.php' ?>
<?php include 'modalSesion.php';  ?>
</body>
</html>