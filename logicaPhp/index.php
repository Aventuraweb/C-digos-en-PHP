<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <head>
        <H1>EXAMPLES</H1>
    </head>
    <section>
        <H2>Variables</H2>
        <?php
            //variables 
            // para hacer la declaracion se debe tener el cuenta la asignacion, el tipo de dato, nombre
            // srt greeting ="hola" es fuertemente tipado
            $greeting = "hola"; // es debilmente tipado se coloca solo el nombre de la variable y la asignacion, pero con un sih¿gno $adelante del nombre 
            
            //echo $greeting; 
            // se concatena con el .
            $thing = "Mundo";
            // se crea una variable para concatenar 
            $greet = $greeting . $thing;  
            echo $greet; 

            // 
            $number_one = 10; 
            
            //variable booleano
            $activo = true; 

            //array sus partes son clave y valor. la clave es el indice, el vslor lo que va dentro 
            $user = array(
                "name" => "juan", 
                "firName" => "Gomez",
                "lasName" => "Marin", 
                "email" => "user@gmail.com"
            ); 

            echo "<br><br><br>"; 

            echo "User is " . $user["name"] . " " .  $user["email"]; 
        ?>
    </section>
    <br><br><br><br>
    <footer>
        &copy; created by JPA -2024
    </footer>
</body>
</html>