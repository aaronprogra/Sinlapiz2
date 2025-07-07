document.addEventListener('DOMContentLoaded', () => {
    
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