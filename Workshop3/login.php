<?php
// login.php
$username = $_GET['username'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>LOGIN</h1>
  <form action="#" method="post">
    <label for="username">Username:</label>
    <input
      type="text"
      id="username"
      name="username"
      value="<?= htmlspecialchars($username) ?>"
      autofocus
    >
    <br><br>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">
    <br><br>

    <button type="submit">Ingresar</button>
  </form>
</body>
</html>
