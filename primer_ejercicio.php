<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1.</title>
</head>
<body>
<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Articulo</th>
      <th scope="col">Precio de venta</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Zapatos</td>
      <td>$350.000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tenis</td>
      <td>$280.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Camisetas</td>
      <td>$175.000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Jeans</td>
      <td>$200.000</td>
    </tr> -->
    <center>
    <?php

    $wc = array(
        "1articulo" => "Precio de los Zapatos",  
        "1precio"=> "$350.000", 
        "2articulo" => "Precio de los Tenis",
        "2precio" => "$280.000",
        "3articulo" => "Precio de las Camisetas", 
        "3precio" => "$175.000",
        "4articulo" => "Precio de los Jeans", 
        "4precio"=> "$200.000"
    );

    echo "<br><br><br>";

    echo "<h1>Alamacen WC </h1><br><br>" . $wc["1articulo"] . " " . $wc["1precio"] . "<br>" . $wc["2articulo"] . " " . $wc["2precio"] . "<br>" . $wc["3articulo"] . " " . $wc["3precio"] . "<br>" . $wc["4articulo"] . " " . $wc["4precio"]; 

    $number_one = 350000; 
    $number_two = 280000; 
    $number_three = 175000; 
    $number_four = 200000; 

    $total = $number_one + $number_two + $number_three + $number_four; 

    echo "<br><br><br>";

    echo "Total es: " . $total; 

    $cantidad_precios = 4; 

    $promedio = $total/$cantidad_precios; 

    echo "<br>";

    echo " El promedio de precios es: " .$promedio; 

    echo "<br>";

    $incremento = $number_four * (6.2 / 100);
    $precio_jeans = $number_four + $incremento;

    echo "Nuevo precio jeans: " .$precio_jeans; 

    echo "<br>";

    $disminuir = $number_one * (0.8 / 100); 
    $precio_zapatos = $number_one - $disminuir; 

    echo "Nuevo precio de Zapatos es: " .$precio_zapatos;  echo "<br>"; echo "<br>";

    ?>
    </center>
  </tbody>
</table>
</body>
</html>