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

<!-- Barra de Navegación Superior con título destacado y botón de inicio de sesión -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary-custom shadow-sm">
        <div class="container-fluid d-flex justify-content-center position-relative">
            <!-- Título de la página centralizado, sin mx-auto aquí ya que el padre lo centrará -->
            <a class="navbar-brand text-white fw-bold display-5 animated-title" href="#">
                APRENDIENDO SIN LÁPIZ NI PAPEL
            </a>
            <!-- Botón para iniciar sesión posicionado absolutamente en la esquina superior derecha -->
            <div class="position-absolute end-0 top-50 translate-middle-y me-3">
                <button class="btn btn-warning text-dark fw-bold rounded-pill px-4 py-2" id="iniciarSesionBtn">
                    <i class="fas fa-user-circle me-2"></i> Iniciar Sesión
                </button>
            </div>
        </div>
    </nav>
    
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
    <script src="../js/script.js"></script>
</body>
</html>