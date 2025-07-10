document.addEventListener('DOMContentLoaded', () => {
    // Select all module cards on the main page (index.html).
    const moduleCards = document.querySelectorAll('.module-card');
    // Login button.
    const iniciarSesionBtn = document.getElementById('iniciarSesionBtn');
    // Initialize the Bootstrap login modal.
    const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));

    // References to the module modal elements.
    // Ensure this modal exists in index.html!
    const moduleModalElement = document.getElementById('moduleModal');
    const moduleModal = new bootstrap.Modal(moduleModalElement);
    const modalModuleTitle = document.getElementById('modalModuleTitle');
    const moduleImage = document.getElementById('moduleImage');
    const startGameMatematicasBtn = document.getElementById('startGameMatematicasBtn');
    const startGameLenguajeBtn = document.getElementById('startGameLenguajeBtn');

    // Define the mapping of each grade to its subject-specific HTML files.
    // Pages for language subjects will need to be created similarly to math pages.
    const gradeSubjectPages = {
        primero: {
            matematicas: 'vistas/1mate.php',
            lenguaje: 'vistas/1lengua.php' // Placeholder for language page
        },
        segundo: {
            matematicas: 'vistas/2mate.php',
            lenguaje: 'vistas/2lengua.php' // Placeholder for language page
        },
        tercero: {
            matematicas: 'vistas/3mate.php',
            lenguaje: 'vistas/3lengua.php' // Placeholder for language page
        },
        cuarto: {
            matematicas: 'vistas/4mate.php',
            lenguaje: 'vistas/3lengua.php' // Placeholder for language page
        }
    };

    // Add an event listener to each module card.
    moduleCards.forEach(card => {
        card.addEventListener('click', () => {
            // Get the module type from the data-module attribute (e.g., 'primero', 'segundo').
            const moduleType = card.dataset.module;

            // Debugging messages for console.
            console.log('Module clicked.');
            console.log('Detected module type (data-module):', moduleType);

            // Check if the clicked module is one of the basic grades that should show the subject selection modal.
            if (gradeSubjectPages[moduleType]) {
                const gradeData = gradeSubjectPages[moduleType];

                // Update modal title and image based on the selected grade.
                // Capitalize the first letter of the module type for display.
                modalModuleTitle.textContent = `Contenido para ${moduleType.charAt(0).toUpperCase() + moduleType.slice(1)} Básico`;
                moduleImage.src = 'https://placehold.co/400x200/FFD700/000?text=Elige+Materia'; // Generic image for selection
                moduleImage.alt = `Elige tu materia para ${moduleType.charAt(0).toUpperCase() + moduleType.slice(1)} Básico`;

                // Set up the click handlers for the subject buttons dynamically.
                // These handlers will redirect to the correct page for the selected grade and subject.
                if (startGameMatematicasBtn) {
                    startGameMatematicasBtn.onclick = () => {
                        if (gradeData.matematicas) {
                            window.location.href = gradeData.matematicas;
                        } else {
                            console.warn(`Página de matemáticas para ${moduleType} Básico no definida.`);
                            // Optionally, show an alert or message to the user.
                            // alert(`El contenido de Matemáticas para ${moduleType.charAt(0).toUpperCase() + moduleType.slice(1)} Básico estará disponible pronto.`);
                        }
                    };
                } else {
                    console.error('The startGameMatematicasBtn button was not found in the DOM.');
                }

                if (startGameLenguajeBtn) {
                    startGameLenguajeBtn.onclick = () => {
                        if (gradeData.lenguaje) {
                            window.location.href = gradeData.lenguaje;
                        } else {
                            console.warn(`Página de lenguaje para ${moduleType} Básico no definida.`);
                            // Optionally, show an alert or message to the user.
                            // alert(`El contenido de Lenguaje para ${moduleType.charAt(0).toUpperCase() + moduleType.slice(1)} Básico estará disponible pronto.`);
                        }
                    };
                } else {
                    console.error('The startGameLenguajeBtn button was not found in the DOM.');
                }

                // Show the module modal.
                moduleModal.show();
            } else {
                // Fallback for any unexpected module types, although all basic grades are now handled.
                console.warn(`Attention! Module type not recognized or not configured to show modal: ${moduleType}.`);
                // You could optionally show a generic message to the user.
            }
        });
    });

    // Add event listener to the login button.
    iniciarSesionBtn.addEventListener('click', () => {
        // Show the login modal.
        loginModal.show();
    });
// --- NEW LOGIC FOR LOGIN FORM SUBMISSION ---
    const loginForm = document.querySelector('#loginModal form');
    if (loginForm) {
        loginForm.addEventListener('submit', (event) => {
            event.preventDefault(); // Prevent the form from submitting and reloading the page.

            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Simple example authentication (for demonstration purposes only).
            // In a real application, this would involve sending credentials to a server.
            if (username === 'profesor' && password === '1234') {
                alert('Inicio de sesión exitoso. Redirigiendo al panel del profesor...');
                loginModal.hide(); // Hide the modal.
                window.location.href = 'vistas/panelProfe.php'; // Redirect to the teacher dashboard.
            } else {
                alert('Usuario o contraseña incorrectos.');
            }
        });
    } else {
        console.error('Login form not found in the DOM.');
    }
    // --- END NEW LOGIC ---
    // Additional global functionalities can be added here if needed.
});