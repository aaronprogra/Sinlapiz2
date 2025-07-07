<?php
header('Content-Type: application/json');
require_once '../modelos/modelosJuego.php';

$modelo = new JuegoModel();
$accion = $_POST['accion'] ?? $_GET['accion'] ?? '';

switch ($accion) {
    case 'buscar1m':
        $juegos = $modelo->obtener1M();
        echo json_encode($juegos);
        break;
    case 'buscar2m':
        $juegos = $modelo->obtener2M();
        echo json_encode($juegos);
        break;    

    // Puedes agregar más acciones después
    default:
        echo json_encode(['success' => false, 'mensaje' => 'Acción no válida.']);
        break;
}
?>
