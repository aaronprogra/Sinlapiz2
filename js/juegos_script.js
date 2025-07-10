document.addEventListener('DOMContentLoaded', () => {
    const gamesList1 = document.getElementById('gamesList1');
    const gamesList2 = document.getElementById('gamesList2');
    const gamesList3 = document.getElementById('gamesList3');
    const gamesList4 = document.getElementById('gamesList4');
    const gamesList5 = document.getElementById('gamesList5');
    const gamesList6 = document.getElementById('gamesList6');
    const gamesList7 = document.getElementById('gamesList7');
    const gamesList8 = document.getElementById('gamesList8');


   function cargarJuegos1() {
    fetch('../controladores/controlMate.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar1m'
})
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
function cargarJuegos2() {
    fetch('../controladores/controlMate.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar2m'
})
.then(res => res.json())
.then(juegos => {
            gamesList2.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList2.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList2.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
function cargarJuegos3() {
    fetch('../controladores/controlMate.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar3m'
})
.then(res => res.json())
.then(juegos => {
            gamesList3.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList3.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList3.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
function cargarJuegos4() {
    fetch('../controladores/controlMate.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar4m'
})
.then(res => res.json())
.then(juegos => {
            gamesList4.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList4.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList4.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
 
if (gamesList1) {
    // Ejecutar al cargar
cargarJuegos1();
} else if(gamesList2) {
  cargarJuegos2();  
}else if(gamesList3) {
  cargarJuegos3();  
}else if(gamesList4) {
  cargarJuegos4();  
}

function cargarJuegos5() {
    fetch('../controladores/controlLengua.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar1l'
})
.then(res => res.json())
.then(juegos => {
            gamesList5.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList5.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList5.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
function cargarJuegos6() {
    fetch('../controladores/controlLengua.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar2l'
})
.then(res => res.json())
.then(juegos => {
            gamesList6.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList6.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList6.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
function cargarJuegos7() {
    fetch('../controladores/controlLengua.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar3l'
})
.then(res => res.json())
.then(juegos => {
            gamesList7.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList7.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList7.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
function cargarJuegos8() {
    fetch('../controladores/controlLengua.php', {
    method: 'POST',
    headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
    body: 'accion=buscar4l'
})
.then(res => res.json())
.then(juegos => {
            gamesList8.innerHTML = ''; // Vaciar la lista actual
            if (juegos.length === 0) {
                gamesList8.innerHTML = '<p id="noGamesMessage" class="text-center text-muted">No hay juegos agregados aún.</p>';
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
                    gamesList8.insertAdjacentHTML('beforeend', cardHtml);
                });
            }
       });
}
 
if (gamesList5) {
    // Ejecutar al cargar
cargarJuegos5();
} else if(gamesList6) {
  cargarJuegos6();  
}else if(gamesList7) {
  cargarJuegos7();  
}else if(gamesList8) {
  cargarJuegos8();  
}


    });