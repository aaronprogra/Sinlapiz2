<?php
class JuegoModel {
    private $conexion;

    public function __construct() {
        $this->conexion = new mysqli("localhost", "root", "", "sinlapiz"); // Ajusta según tus credenciales
        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }

    public function agregarJuego($titulo, $url, $curso, $materia, $imagenBase64) {
        $stmt = $this->conexion->prepare("INSERT INTO juegos (titulo, url, curso, materia, imagen) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $titulo, $url, $curso, $materia, $imagenBase64);
        return $stmt->execute();
    }

    public function obtenerJuegos() {
        $result = $this->conexion->query("SELECT * FROM juegos ORDER BY id DESC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>