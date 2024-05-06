<?php

require 'Hotel.php';

$hotel = new Hotel();

$hotel->diasEstadia = $_POST['diasEstadia'];
$hotel->tipoDHabitacion = $_POST['tipoDHabitacion'];
$hotel->cantHuesped = $_POST['cantHuesped']; 

$hotel->mostrarInformacion();


?>
