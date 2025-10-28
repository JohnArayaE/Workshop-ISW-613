<?php
// Ejecutar por CLI: php validateActiveSessions.php 24
// Desactiva usuarios "active" cuyo último login fue hace MÁS de N horas.

if (php_sapi_name() !== 'cli') {
    echo "Este script se ejecuta solo por línea de comandos.\n";
    exit(1);
}

$hours = isset($argv[1]) ? (int)$argv[1] : null;
if ($hours === null || $hours <= 0) {
    echo "Uso: php validateActiveSessions.php <horas>\n";
    echo "Ejemplo: php validateActiveSessions.php 24\n";
    exit(1);
}

// Carga la conexión (usa la misma del proyecto)
include('../common/connection.php');

// (1) Mostrar a quiénes afectaría (informativo)
$listSql = "
    SELECT id, username,
           TIMESTAMPDIFF(HOUR, last_login_datetime, NOW()) AS hours_diff
    FROM users
    WHERE status = 'active'
      AND last_login_datetime IS NOT NULL
      AND TIMESTAMPDIFF(HOUR, last_login_datetime, NOW()) > {$hours}
";
$listRes = mysqli_query($conn, $listSql);

$toDeactivate = [];
if ($listRes && mysqli_num_rows($listRes) > 0) {
    while ($row = mysqli_fetch_assoc($listRes)) {
        $toDeactivate[] = $row;
    }
}

echo "Horas límite: {$hours}\n";
echo "Usuarios activos con último login > {$hours}h: " . count($toDeactivate) . "\n";

foreach ($toDeactivate as $u) {
    echo "- {$u['username']} (id: {$u['id']}) — {$u['hours_diff']}h\n";
}

// (2) Ejecutar el UPDATE (marcar como 'inactive')
$updateSql = "
    UPDATE users
    SET status = 'inactive'
    WHERE status = 'active'
      AND last_login_datetime IS NOT NULL
      AND TIMESTAMPDIFF(HOUR, last_login_datetime, NOW()) > {$hours}
";
mysqli_query($conn, $updateSql);

$affected = mysqli_affected_rows($conn);
echo "Actualizados a 'inactive': {$affected}\n";

mysqli_close($conn);
