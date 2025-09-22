<?php
// Configurar zona horaria (ajústala a la tuya)
date_default_timezone_set('America/Costa_Rica');

// Obtener fecha y hora actuales
$fecha = date("d/m/Y");
$hora = date("H:i");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARA VER HORA Y FECHA</title>
</head>
<body>
    <header>
        <h1>BIENVENIDOS AL PHP</h1>
    </header>

    <main>
        <div class="Hero-class">
            <fieldset>
                <legend>Fecha y hora actuales</legend>

                <label for="fecha">Fecha:</label>
                <input type="text" id="fecha" name="fecha" value="<?php echo $fecha; ?>" readonly>

                <br><br>

                <label for="hora">Hora:</label>
                <input type="text" id="hora" name="hora" value="<?php echo $hora; ?>" readonly>
            </fieldset>
        </div>
    </main>
</body>
</html>
