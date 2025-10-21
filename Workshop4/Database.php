<?php
// Database.php - Aplica ENCAPSULAMIENTO
class Database {
    // Propiedades privadas (encapsulamiento)
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "workshop3";
    private $conn;
    
    // Método público para conectar
    public function conectar() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }
        return $this->conn;
    }
    
    // Método público para cerrar conexión
    public function cerrar() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
    
    // Método protegido para obtener datos (encapsulamiento)
    protected function obtenerProvincias() {
        return $this->conn->query("SELECT id, nombre FROM provincia ORDER BY nombre");
    }
}
?>