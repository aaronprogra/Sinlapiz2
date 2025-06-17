document.addEventListener('DOMContentLoaded', () => {
    // Referencias a elementos del formulario
    const addGameForm = document.getElementById('addGameForm');
    const gameTitleInput = document.getElementById('gameTitle');
    const gameUrlInput = document.getElementById('gameUrl');
    const gameGradeSelect = document.getElementById('gameGrade'); // Nuevo: Selector de Curso
    const gameSubjectSelect = document.getElementById('gameSubject'); // Nuevo: Selector de Materia
    const gameImageInput = document.getElementById('gameImage');
    const uploadArea = document.getElementById('uploadArea');
    const imagePreview = document.getElementById('imagePreview');
    const gamesList = document.getElementById('gamesList');
    const noGamesMessage = document.getElementById('noGamesMessage');

    let uploadedImageUrl = ''; // Variable para almacenar la URL de la imagen cargada

    // ----- Lógica para cargar y previsualizar la imagen -----
    uploadArea.addEventListener('click', () => {
        gameImageInput.click(); // Simular clic en el input de archivo
    });

    gameImageInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('d-none'); // Mostrar la vista previa
                uploadedImageUrl = e.target.result; // Guardar la URL base64 para usarla
            };
            reader.readAsDataURL(file); // Leer el archivo como URL base64
        } else {
            imagePreview.src = '#';
            imagePreview.classList.add('d-none');
            uploadedImageUrl = '';
        }
    });

    // Permitir arrastrar y soltar archivos
    uploadArea.addEventListener('dragover', (event) => {
        event.preventDefault(); // Evitar el comportamiento predeterminado del navegador
        uploadArea.style.borderColor = 'var(--info-color)'; // Cambiar borde al arrastrar
    });

    uploadArea.addEventListener('dragleave', () => {
        uploadArea.style.borderColor = '#ccc'; // Restaurar borde al salir
    });

    uploadArea.addEventListener('drop', (event) => {
        event.preventDefault();
        uploadArea.style.borderColor = '#ccc'; // Restaurar borde al soltar
        const file = event.dataTransfer.files[0];
        if (file) {
            gameImageInput.files = event.dataTransfer.files; // Asignar el archivo al input
            const reader = new FileReader();
            reader.onload = (e) => {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('d-none');
                uploadedImageUrl = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });


    // ----- Lógica para agregar un juego al hacer clic en el botón -----
    addGameForm.addEventListener('submit', (event) => {
        event.preventDefault(); // Evitar que el formulario se envíe (y recargue la página)

        const title = gameTitleInput.value.trim();
        const url = gameUrlInput.value.trim();
        const grade = gameGradeSelect.value;   // Nuevo: Obtener el curso seleccionado
        const subject = gameSubjectSelect.value; // Nuevo: Obtener la materia seleccionada
        const imageUrl = uploadedImageUrl; // Usar la URL base64 de la imagen cargada

        // Validar que todos los campos requeridos estén llenos
        if (title && url && grade && subject && imageUrl) {
            // Eliminar el mensaje "No hay juegos agregados aún" si existe
            if (noGamesMessage) {
                const existingNoGamesMessage = document.getElementById('noGamesMessage');
                if (existingNoGamesMessage) {
                    existingNoGamesMessage.remove();
                }
            }

            // Crear la tarjeta de juego dinámicamente
            // Añadimos el curso y la materia a la descripción para visualización
            const gameCardHtml = `
                <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                    <div class="card game-card flex-fill">
                        <a href="${url}" target="_blank" rel="noopener noreferrer">
                            <img src="${imageUrl}" class="card-img-top" alt="Imagen de ${title}">
                            <div class="card-body text-center">
                                <h5 class="card-title">${title}</h5>
                                <p class="card-text text-muted">${grade.charAt(0).toUpperCase() + grade.slice(1)} Básico - ${subject.charAt(0).toUpperCase() + subject.slice(1)}</p>
                            </div>
                        </a>
                    </div>
                </div>
            `;
            // Insertar la nueva tarjeta al inicio de la lista de juegos
            gamesList.insertAdjacentHTML('afterbegin', gameCardHtml);

            // Limpiar el formulario después de agregar el juego
            addGameForm.reset();
            imagePreview.src = '#';
            imagePreview.classList.add('d-none');
            uploadedImageUrl = ''; // Resetear la URL de la imagen
        } else {
            // Mostrar un mensaje de error si faltan campos
            alert('Por favor, completa todos los campos (Título, URL, Curso, Materia e Imagen).');
        }
    });

    // ----- Lógica para el botón de Iniciar Sesión / Cerrar Sesión -----
    const loginLogoutBtn = document.getElementById('loginLogoutBtn');
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));

    // Estado simulado de la sesión: true porque al llegar aquí, asumimos que el profesor inició sesión
    let isLoggedIn = true; // CAMBIO AQUÍ: Inicializa a true

    // Función para actualizar el texto del botón
    function updateLoginButton() {
        if (isLoggedIn) {
            loginLogoutBtn.innerHTML = '<i class="fas fa-sign-out-alt me-2"></i> Cerrar Sesión';
            loginLogoutBtn.classList.remove('btn-warning');
            loginLogoutBtn.classList.add('btn-secondary'); // O el color que prefieras para "cerrar sesión"
        } else {
            loginLogoutBtn.innerHTML = '<i class="fas fa-user-circle me-2"></i> Iniciar Sesión';
            loginLogoutBtn.classList.remove('btn-secondary');
            loginLogoutBtn.classList.add('btn-warning');
        }
    }

    // Llamar al actualizar el botón al cargar la página
    updateLoginButton();

    // Event listener para el botón de Iniciar Sesión / Cerrar Sesión
    loginLogoutBtn.addEventListener('click', () => {
        if (isLoggedIn) {
            // Lógica para cerrar sesión (en una aplicación real, implicaría una llamada al backend)
            alert('Has cerrado sesión.');
            isLoggedIn = false;
            window.location.href = '../index.php'; // CAMBIO AQUÍ: Redirige a index.html
        } else {
            // Lógica para iniciar sesión (solo abre el modal por ahora)
            loginModal.show();
        }
        updateLoginButton(); // Actualizar el botón después de la acción
    });

    // Opcional: Lógica para manejar el envío del formulario de login (dentro del modal)
    // Esto es para el modal de login si se abriera, aunque la idea es que ya esté logueado.
    document.querySelector('#loginModal form').addEventListener('submit', (event) => {
        event.preventDefault(); // Evitar recarga de la página
        // Aquí iría la lógica de autenticación real (ej. enviar a un backend)
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        if (username === 'profesor' && password === '1234') { // Ejemplo simple de credenciales
            alert('Inicio de sesión exitoso. ¡Bienvenido, profesor!');
            isLoggedIn = true;
            loginModal.hide(); // Ocultar el modal
            updateLoginButton(); // Actualizar el botón
            window.location.href = 'vistas/panelprofe.php'; // Redirige al panel si se loguea desde el modal
        } else {
            alert('Usuario o contraseña incorrectos.');
        }
    });

});