<?php
include('../common/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // ✅ Solo usuarios activos pueden ingresar
    $sql = "SELECT * FROM users WHERE username = '$username' AND status = 'active'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        // Compara contraseñas con md5 (como tu registro actual)
        if (md5($password) === $row['password']) {

            // ✅ Actualiza fecha y hora de último login (punto 2)
            $userId = (int)$row['id'];
            mysqli_query($conn, "UPDATE users SET last_login_datetime = NOW() WHERE id = $userId");

            // Inicia la sesión
            session_start();
            $_SESSION['username']  = $row['username'];
            $_SESSION['firstname'] = $row['name'];

            header("Location: ../pages/dashboard.php");
            exit();
        } else {
            // Contraseña incorrecta
            header("Location: ../index.php?error=wrong_password");
            exit();
        }
    } else {
        // Usuario no existe o está inactivo
        header("Location: ../index.php?error=inactive_or_not_found");
        exit();
    }

    mysqli_close($conn);
} else {
    header("Location: ../index.php");
    exit();
}
