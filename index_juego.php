<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendiendo sin Lápiz ni Papel</title>
    <!-- Enlace a Bootstrap CSS para un diseño responsivo -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Enlace a Font Awesome para iconos si se necesitan más adelante -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Enlace a la fuente Lobster de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos personalizados para colores y diseño -->
    <link rel="stylesheet" href="css/juegos_styles.css">
</head>
<body>

    <!-- Barra de Navegación Superior con título destacado y botón de inicio de sesión -->
    <!-- Barra de Navegación Superior -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom shadow-sm">
  <div class="container-fluid d-flex flex-column flex-lg-row align-items-center justify-content-between">
    
    <!-- Título -->
    <a class="navbar-brand text-white fw-bold display-5 animated-title text-center mb-2 mb-lg-0" href="#">
      Aprendiendo sin lápiz ni papel
    </a>

    <!-- Botón Iniciar Sesión -->
    <button class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2" id="iniciarSesionBtn">
      <i class="fas fa-user-circle me-2"></i> Iniciar Sesión
    </button>

  </div>
</nav>

    <!-- Contenido Principal de la página -->
    <div class="container mt-5">
        <!-- Título del colegio -->
        <h2 class="text-center text-info-custom mb-5 school-title">
            "Colegio Carlos Condell de La Haza, La Serena"
        </h2>

        <!-- Sección de módulos de grado -->
        <div class="row justify-content-center g-4">
            <!-- Módulo para Primero Básico -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card h-100 shadow-lg border-0 module-card bg-success-custom text-white" data-module="primero">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="fas fa-child fa-3x mb-3"></i>
                        <h3 class="card-title fw-bold">PRIMERO BÁSICO</h3>
                        <p class="card-text">¡Empieza tu aventura de aprendizaje!</p>
                    </div>
                </div>
            </div>
            <!-- Módulo para Segundo Básico -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card h-100 shadow-lg border-0 module-card bg-danger-custom text-white" data-module="segundo">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="fas fa-book-reader fa-3x mb-3"></i>
                        <h3 class="card-title fw-bold">SEGUNDO BÁSICO</h3>
                        <p class="card-text">¡Descubre nuevos desafíos!</p>
                    </div>
                </div>
            </div>
            <!-- Módulo para Tercero Básico -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card h-100 shadow-lg border-0 module-card bg-info-custom text-white" data-module="tercero">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="fas fa-chalkboard fa-3x mb-3"></i>
                        <h3 class="card-title fw-bold">TERCERO BÁSICO</h3>
                        <p class="card-text">¡Sigue explorando y aprendiendo!</p>
                    </div>
                </div>
            </div>
            <!-- Módulo para Cuarto Básico -->
            <div class="col-md-6 col-lg-3 d-flex">
                <div class="card h-100 shadow-lg border-0 module-card bg-warning-custom text-dark" data-module="cuarto">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                        <i class="fas fa-graduation-cap fa-3x mb-3"></i>
                        <h3 class="card-title fw-bold">CUARTO BÁSICO</h3>
                        <p class="card-text">¡Prepárate para grandes logros!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para mostrar el contenido de cada módulo (Primero a Cuarto Básico) -->
    <div class="modal fade" id="moduleModal" tabindex="-1" aria-labelledby="moduleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 shadow-lg">
                <div class="modal-header bg-primary-custom text-white rounded-top-4">
                    <h5 class="modal-title fw-bold" id="moduleModalLabel">Contenido del Módulo</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body p-4 text-center">
                    <h4 id="modalModuleTitle" class="text-info-custom mb-3 fw-bold"></h4>
                    <p class="lead">Aquí es donde aparecerá el contenido interactivo. ¡Elige tu área favorita!</p>
                    <img id="moduleImage" src="https://placehold.co/400x200/FFD700/000?text=Juego+Educativo" alt="Placeholder de juego" class="img-fluid rounded my-3">
                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3 mt-4">
                        <!-- Botón de Matemáticas ahora azul -->
                        <button class="btn btn-lg btn-info-custom text-white rounded-pill px-5 py-3 interactive-button" id="startGameMatematicasBtn">
                            <i class="fas fa-calculator me-2"></i> Empezar a jugar con Matemáticas
                        </button>
                        <!-- Botón de Lenguaje ahora rojo -->
                        <button class="btn btn-lg btn-danger-custom text-white rounded-pill px-5 py-3 interactive-button" id="startGameLenguajeBtn">
                            <i class="fas fa-pen-alt me-2"></i> Empezar a jugar con Lenguaje
                        </button>
                    </div>
                </div>
                <div class="modal-footer justify-content-center border-top-0 pt-0">
                    <button type="button" class="btn btn-secondary-custom rounded-pill px-4" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para el inicio de sesión -->
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

    <!-- Enlace a Bootstrap JavaScript (Bundle con Popper) para funcionalidades interactivas -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace a JavaScript personalizado para el comportamiento de la página -->
    <script src="js/condell_script.js"></script>
</body>
</html>