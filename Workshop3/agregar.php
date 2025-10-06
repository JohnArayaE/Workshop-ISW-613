<?php
$host="localhost"; 
$user="root"; 
$pass=""; 
$db="workshop3";
$conn = new mysqli($host,$user,$pass,$db);

$nombre   = $_POST['nombre'];
$apellido = $_POST['apellido'];
$provincia= $_POST['provincia'];

$sql = "INSERT INTO usuarios (nombre, apellido, id_provincia)
        VALUES ('$nombre', '$apellido', '$provincia')";

if ($conn->query($sql) === TRUE) {
    header("Location: login.php?username=" . urlencode($nombre));
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
