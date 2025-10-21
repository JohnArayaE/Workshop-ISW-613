<?php
require_once 'Database.php';

// Aplica HERENCIA - ProvinciaManager hereda de Database
class ProvinciaManager extends Database {
    public function mostrarProvincias() {
        $conn = $this->conectar();
        $provs = $this->obtenerProvincias();
        
        while($p = $provs->fetch_assoc()) {
            echo '<option value="' . $p['id'] . '">' . htmlspecialchars($p['nombre']) . '</option>';
        }
        
        $this->cerrar();
    }
}

$manager = new ProvinciaManager();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <h1>AGREGAR PERSONAS</h1>
    <form action="agregar.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br><br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br><br>
        <label for="provincia">Provincia:</label>
        <select id="provincia" name="provincia" required>
            <option value="">-- Seleccione --</option>
            <?php $manager->mostrarProvincias(); ?>
        </select>
        <br><br>
        <button type="submit">AGREGAR</button>
    </form>
</body>
</html>