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

        <!-- Botón para Volver al Inicio -->
        <div class="text-center back-button">
            <a href="index.html" class="btn btn-primary-custom btn-lg rounded-pill px-5 py-3 interactive-button">
                <i class="fas fa-arrow-left me-2"></i> Volver al Inicio
            </a>
        </div>
    </div>

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
    <!-- Incluir script.js si manejas el modal de login globalmente, o un script específico -->
    <script src="js/script.js"></script>
    <script>
        // Script específico para manejar el botón de iniciar sesión en esta página
        document.addEventListener('DOMContentLoaded', () => {
            const iniciarSesionBtn = document.getElementById('iniciarSesionBtn');
            const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));

            if (iniciarSesionBtn) {
                iniciarSesionBtn.addEventListener('click', () => {
                    loginModal.show();
                });
            }
        });
    </script>
</body>
</html>