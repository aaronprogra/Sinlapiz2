<?php
header('Content-Type: application/json');
require_once '../modelos/modelosJuego.php';

$modelo = new JuegoModel();
$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

switch ($accion) {
    case 'buscar1l':
        $juegos = $modelo->obtener1L();
        echo json_encode($juegos);
        break;
    case 'buscar2l':
        $juegos = $modelo->obtener2L();
        echo json_encode($juegos);
        break;
    case 'buscar3l':
        $juegos = $modelo->obtener3L();
        echo json_encode($juegos);
        break;
    case 'buscar4l':
        $juegos = $modelo->obtener4L();
        echo json_encode($juegos);
        break;         

    // Puedes agregar más acciones después
    default:
        echo json_encode(['success' => false, 'mensaje' => 'Acción no válida.']);
        break;
}
?>