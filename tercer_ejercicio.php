<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    
    <center>
    <?php

$individual = 2500; 
$doble = 4600; 
$familiar = 5200;  
$diasEstadia = 2; 
$tipoDHabitacion = 'individual';
$cantHuesped = 1; 

echo "<h1>El hotel Wc </h1><br><br>"; 

if ($tipoDHabitacion == 'individual' ) {
    $precioHabitacion = $diasEstadia * $individual; 
    echo "El valor de la habitación sin IVA es: $" .$precioHabitacion; 
    $precioConIVA =  $precioHabitacion * 1.19;  
    echo "<br>"; 
    echo "El valor de la habitación con IVA es: $" .$precioConIVA; 
    
    if ($cantHuesped == 1) {
        $descuento = $precioHabitacion * 0.05; 
        $precioFinal = $precioConIVA - $descuento; 
        echo "<br>"; 
        echo "El precio de la habitación con descuento es: $" .$precioFinal; 
    }
} elseif ($tipoDHabitacion == 'doble') {
    $precioHabitacion = $diasEstadia * $doble; 
    echo "El valor de la habitación sin IVA es: $" .$precioHabitacion; 
    $precioConIVA =  $precioHabitacion * 1.19;
    echo "<br>"; 
    echo "El valor de la habitación con IVA es: $" .$precioConIVA; 

    if ($cantHuesped == 2) {
        $descuento = $precioHabitacion * 0.09; 
        $precioFinal = $precioConIVA - $descuento;
        echo "<br>"; 
        echo "El precio de la habitación con descuento es: $" .$precioFinal; 
    }
} else {
    $precioHabitacion = $diasEstadia * $familiar; 
    echo "<br>"; 
    echo "El valor de la habitación sin IVA es: $" .$precioHabitacion; 
    $precioConIVA =  $precioHabitacion * 1.19;
    echo "<br>"; 
    echo "El valor de la habitación con IVA es: $" .$precioConIVA; 

    if ($cantHuesped == 3) {
        $descuento = $precioHabitacion * 0.15; 
        $precioFinal = $precioConIVA - $descuento;
        echo "<br>"; 
        echo "El precio de la habitación con descuento es: $" .$precioFinal; 
    }
}
    ?>
    </center>
</body>
</html>