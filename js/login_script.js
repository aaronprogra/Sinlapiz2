document.addEventListener('DOMContentLoaded', () => {
    function cargarJuegos() {
    fetch('../controladores/controlJuego.php')
        .then(res => res.json())
        .then(juegos => {
            gamesList1.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList1.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
            } else {
                juegos.forEach(juego => {
                    const cardHtml = `
                        <div class="col-sm-6 col-md-4 col-lg-3 d-flex">
                            <div class="card game-card flex-fill">
                                <a href="${juego.url}" target="_blank" rel="noopener noreferrer">
                                    <img src="${juego.imagen}" class="card-img-top" alt="Imagen de ${juego.titulo}">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">${juego.titulo}</h5>
                                        <p class="card-text text-muted">${juego.curso.charAt(0).toUpperCase() + juego.curso.slice(1)} Básico - ${juego.materia.charAt(0).toUpperCase() + juego.materia.slice(1)}</p>
                                    </div>
                                </a>
                            </div>
                        </div>`;
                    gamesList1.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
        });
}

// Ejecutar al cargar
cargarJuegos();
    const iniciarSesionBtn = document.getElementById('iniciarSesionBtn');
    const loginModalElement = document.getElementById('loginModal');

    // Solo si existen los elementos relacionados al login
    if (iniciarSesionBtn && loginModalElement) {
        const loginModal = new bootstrap.Modal(loginModalElement);

        iniciarSesionBtn.addEventListener('click', () => {
            loginModal.show();
        });

        const loginForm = loginModalElement.querySelector('form');
        if (loginForm) {
            loginForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;

                if (username === 'profesor' && password === '1234') {
                    alert('Inicio de sesión exitoso. Redirigiendo al panel del profesor...');
                    loginModal.hide();
                    window.location.href = 'panelProfe.php';
                } else {
                    alert('Usuario o contraseña incorrectos.');
                }
            });
        }
    }

    
    });