<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2.</title>
</head>
<body>
    <center>
    <?php

    $empleados = 4;  
    $valorHoraDiaria = 0; 
    $tipoProyecto = "A"; 
    $horasLaboralesDiarias = 8; 
    $diasMes = 30;   
    $canthoraExtra = 3; 

    for ( $i = 0; $i < $empleados; $i++){
        if( $tipoProyecto == "A" ){
            $valorHoraDiaria = 20000; 
        }else if( $tipoProyecto == "B" ){
            $valorHoraDiaria = 10000; 
        }else{
            $valorHoraDiaria = 5000; 
        }
    }
    echo "El valor de la hora es: $ " .$valorHoraDiaria; 
    
    $sueldoMensual = $horasLaboralesDiarias * $diasMes * $valorHoraDiaria ;

    echo "<br>"; 

    echo "El sueldo mensual es: $ " .$sueldoMensual; 

    if ( $sueldoMensual > 1500000){
        echo "<br>"; 
        echo "Salario es mayor a tope máximo"; 
    }else{
        $ValorHoraExtra = $valorHoraDiaria * 0.06; 
        $horaExtra = $ValorHoraExtra + $valorHoraDiaria;

        $nuevoSueldo = $sueldoMensual + $horaExtra * $canthoraExtra; 

    echo "<br>"; 
    echo "Valor hora extra es: $ "  . $horaExtra; 
    echo "<br>"; 
    echo "Nuevo sueldo mensual es: $ " .$nuevoSueldo; 
    }

    ?>
    </center>
</body>
</html>