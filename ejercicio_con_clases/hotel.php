<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
</head>
<body>
    
<?php

// Clase Hotel
class Hotel {
    var $diasEstadia;
    var $tipoDHabitacion;
    var $cantHuesped;

    var $individual = 2500; 
    var $doble = 4600; 
    var $familiar = 5200;

    // Método para calcular el precio de la habitación
    public function calcularPrecioHabitacion() {
        if ($this->tipoDHabitacion == 'individual') {
            $precioHabitacion = $this->diasEstadia * $this->individual;
        } elseif ($this->tipoDHabitacion == 'doble') {
            $precioHabitacion = $this->diasEstadia * $this->doble;
        } elseif ($this->tipoDHabitacion == 'familiar') {
            $precioHabitacion = $this->diasEstadia * $this->familiar;
        } else {
            $precioHabitacion = 0;
        }
        return $precioHabitacion;
    }

    // Método para aplicar descuentos
    public function aplicarDescuento($precioConIVA) {
        $descuento = 0;
        if ($this->cantHuesped == 1) {
            $descuento = $precioConIVA * 0.05;
        }
        if ($this->cantHuesped == 2) {
            $descuento = $precioConIVA * 0.09;
        }
        if ($this->cantHuesped == 3) {
            $descuento = $precioConIVA * 0.15;
        }
        return $descuento;
    }

    // Método para mostrar la información
    public function mostrarInformacion() {
        $precioHabitacion = $this->calcularPrecioHabitacion();
        echo "<h1>El hotel Wc</h1><br><br>";
        echo "El valor de la habitación sin IVA es: $" . $precioHabitacion;
        echo "<br>";
        $precioConIVA = $precioHabitacion * 1.19;
        echo "El valor de la habitación con IVA es: $" . $precioConIVA;
        echo "<br>";
        if ($this->cantHuesped > 0 && $this->cantHuesped <= 3) {
            $descuento = $this->aplicarDescuento($precioConIVA);
            $precioFinal = $precioConIVA - $descuento;
            echo "El precio de la habitación con descuento es: $" . $precioFinal;
        }
    }
}

?>
</body>
</html>