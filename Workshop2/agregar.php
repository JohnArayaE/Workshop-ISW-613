<?php

$host = "localhost";   // Servidor
$user = "root";        // Usuario por defecto de XAMPP
$pass = "";            // Contraseña (en XAMPP por defecto está vacía)
$db   = "workshop2";    // Nombre de tu base de datos

$conn = new mysqli($host, $user, $pass, $db);

$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo   = $_POST['correo'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO usuarios (nombre, apellido, correo, telefono) 
        VALUES ('$nombre', '$apellido', '$correo', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Registro agregado con éxito ✅";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
