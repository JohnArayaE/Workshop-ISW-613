<?php
require_once 'Database.php';

// Aplica ENCAPSULAMIENTO
class UsuarioManager extends Database {
    private $nombre;
    private $apellido;
    private $provincia;
    
    // Método público para agregar usuario
    public function agregarUsuario($datos) {
        // Asigna los datos a propiedades privadas (encapsulamiento)
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->provincia = $datos['provincia'];
        
        $conn = $this->conectar();
        
        // Prepara la consulta de forma segura
        $sql = "INSERT INTO usuarios (nombre, apellido, id_provincia) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssi", $this->nombre, $this->apellido, $this->provincia);
        
        if ($stmt->execute()) {
            header("Location: login.php?username=" . urlencode($this->nombre));
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
        $this->cerrar();
    }
}

// Uso de la clase
$manager = new UsuarioManager();
$manager->agregarUsuario($_POST);
?>