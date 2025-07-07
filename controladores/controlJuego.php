<?php
header('Content-Type: application/json');
require_once '../modelos/modelosJuego.php';

$metodo = $_SERVER['REQUEST_METHOD'];
$modelo = new JuegoModel();

if ($metodo === 'POST') {
    $data = json_decode(file_get_contents("php://input"), true);
    
    if (
        isset($data['titulo']) && isset($data['url']) &&
        isset($data['curso']) && isset($data['materia']) &&
        isset($data['imagen'])
    ) {
        $resultado = $modelo->agregarJuego(
            $data['titulo'],
            $data['url'],
            $data['curso'],
            $data['materia'],
            $data['imagen']
        );
        echo json_encode(['success' => $resultado]);
    } else {
        echo json_encode(['success' => false, 'mensaje' => 'Faltan datos.']);
    }

} elseif ($metodo === 'GET') {
    $juegos = $modelo->obtenerJuegos();
    echo json_encode($juegos);
}
?>