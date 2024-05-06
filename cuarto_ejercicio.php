<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4.</title>
</head>
<body>

<?php

$equipos = array(
    "DIM" => 3,
    "Nacional" => 5,
    "Envigado" => 2,
    "Águilas" => 4
);

$precios = array(
    "DIM" => 3000000,
    "Nacional" => 2100000,
    "Envigado" => 1650000,
    "Águilas" => 350000
);

// Calcular la inversión total realizada por cada equipo
$inversiones = array();
$totalJugadores = 0;
$totalInversion = 0;

// Mostrar los resultados de cada equipo en una tabla HTML
echo "<table border='1'>";
echo "<tr><th>Equipo</th><th>Jugadores</th><th>Precio</th><th>Inversión</th></tr>";

$equipos_keys = array_keys($equipos);
$equipos_count = count($equipos_keys);

for ($i = 0; $i < $equipos_count; $i++) {
    $equipo = $equipos_keys[$i];
    $jugadores = $equipos[$equipo];
    $inversion = $precios[$equipo] * $jugadores;
    $inversiones[$equipo] = $inversion;
    $totalJugadores += $jugadores;
    $totalInversion += $inversion;

    echo "<tr>";
    echo "<td>$equipo</td>";
    echo "<td>$jugadores</td>";
    echo "<td>" . number_format($precios[$equipo], 2) . " €</td>";
    echo "<td>" . number_format($inversiones[$equipo], 2) . " €</td>";
    echo "</tr>";
}

// Mostrar los totales
echo "<tr>";
echo "<td><b>TOTALES</b></td>";
echo "<td><b>$totalJugadores</b></td>";
echo "<td></td>";
echo "<td><b>" . number_format($totalInversion, 2) . " €</b></td>";
echo "</tr>";

echo "</table>";

?>

</body>
</html>