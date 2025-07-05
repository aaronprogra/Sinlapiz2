<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel del Profesor - Aprendiendo sin Lápiz ni Papel</title>
    <!-- Enlace a Bootstrap CSS para un diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la fuente Lobster de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para colores y diseño -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- Nota: Los estilos específicos de esta página han sido movidos a styles.css -->
</head>
<body>

    <!-- Barra de Navegación Superior - Mismo estilo que otras páginas -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom shadow-sm">
        <div class="container-fluid d-flex justify-content-center position-relative">
            <a class="navbar-brand text-white fw-bold display-5 animated-title" href="#">
                APRENDIENDO SIN LÁPIZ NI PAPEL
            </a>
            <div class="position-absolute end-0 top-50 translate-middle-y me-3">
                <!-- Se añade un ID para poder manipular el botón desde JavaScript -->
                <button class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2" id="loginLogoutBtn">
                    <i class="fas fa-user-circle me-2"></i> Iniciar Sesión
                </button>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal: Panel del Profesor -->
    <div class="container mt-5">
        <h2 class="text-center text-info-custom mb-5 school-title">
            Panel del Profesor
        </h2>

        <!-- Sección de Formulario para Agregar Juegos -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-section">
                    <h4 class="text-center mb-4 text-primary-custom">Agregar Nuevo Juego Educativo</h4>
                    <form id="addGameForm">
                        <div class="mb-3">
                            <label for="gameTitle" class="form-label">Título del Juego:</label>
                            <input type="text" class="form-control" id="gameTitle" placeholder="Ej: Sumas con animalitos" required>
                        </div>
                        <div class="mb-3">
                            <label for="gameUrl" class="form-label">URL del Juego:</label>
                            <input type="url" class="form-control" id="gameUrl" placeholder="Ej: https://wordwall.net/juego-de-ejemplo" required>
                        </div>
                        <div class="mb-3">
                            <label for="gameGrade" class="form-label">Curso:</label>
                            <select class="form-select" id="gameGrade" required>
                                <option value="">Selecciona el curso</option>
                                <option value="primero">Primero Básico</option>
                                <option value="segundo">Segundo Básico</option>
                                <option value="tercero">Tercero Básico</option>
                                <option value="cuarto">Cuarto Básico</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gameSubject" class="form-label">Materia:</label>
                            <select class="form-select" id="gameSubject" required>
                                <option value="">Selecciona la materia</option>
                                <option value="matematicas">Matemáticas</option>
                                <option value="lenguaje">Lenguaje</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="gameImage" class="form-label">Imagen Referencial del Juego:</label>
                            <div class="upload-area" id="uploadArea">
                                <i class="fas fa-upload fa-2x text-muted mb-2"></i>
                                <p class="text-muted">Arrastra y suelta una imagen aquí o haz clic para seleccionarla</p>
                                <input type="file" id="gameImage" accept="image/*">
                                <img id="imagePreview" src="#" alt="Vista previa de imagen" class="uploaded-image-preview d-none">
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-success-custom btn-lg rounded-pill interactive-button">
                                <i class="fas fa-plus-circle me-2"></i> Agregar Juego
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Sección para mostrar los juegos agregados dinámicamente -->
        <h3 class="text-center text-info-custom mb-4">Juegos Agregados</h3>
        <div class="row justify-content-center" id="gamesList">
            <!-- Los juegos agregados se insertarán aquí por JavaScript -->
            <p class="text-center text-muted" id="noGamesMessage">No hay juegos agregados aún. ¡Usa el formulario de arriba!</p>
        </div>

   <?php include 'back.php' ?>

    <!-- Modales de Iniciar Sesión (se mantiene el mismo modal de index.html) -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-warning-custom text-dark rounded-top-4">
                    <h5 class="modal-title fw-bold" id="loginModalLabel">Iniciar Sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="mb-3">
                            <label for="username" class="form-label fw-bold text-dark">Usuario:</label>
                            <input type="text" class="form-control rounded-pill px-3 py-2" id="username" placeholder="Ingresa tu usuario">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label fw-bold text-dark">Contraseña:</label>
                            <input type="password" class="form-control rounded-pill px-3 py-2" id="password" placeholder="Ingresa tu contraseña">
                        </div>
                        <button type="submit" class="btn btn-primary-custom w-100 rounded-pill py-2 fw-bold interactive-button">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Enlace a Bootstrap JavaScript (Bundle con Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace a JavaScript personalizado para este panel de profesor -->
    <script src="../js/profe_script.js"></script>
</body>
</html>
