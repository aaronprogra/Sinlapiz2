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
<?php include 'nav.php';  ?>
    <!-- Contenido Principal de la página de Matemáticas Primero Básico -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Matemáticas - Primero Básico
        </h2>

        <div class="row justify-content-center g-4">
            <!-- Ejemplo de Juego 1: Sumas Básicas -->
       

            <!-- Puedes añadir más juegos aquí siguiendo el mismo formato -->
<!-- Sección para mostrar los juegos agregados dinámicamente -->
        <h3 class="text-center text-info-custom mb-4">Juegos Agregados</h3>
        <div class="row justify-content-center" id="gamesList1">
            <!-- Los juegos agregados se insertarán aquí por JavaScript -->
            <p class="text-center text-muted" id="noGamesMessage">No hay juegos agregados aún. ¡Usa el formulario de arriba!</p>
        </div>


        </div>
        <?php include 'modalSesion.php';  ?>
<?php include 'back.php' ?>

    
</body>
</html>