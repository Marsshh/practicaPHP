<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    $restaurant = array();
//primer bucle per insertar valors random al array
    for ($i = 0; $i < 10; $i++) {
    
        $restaurant[$i] = rand(0, 5);
    }
    

        //bucle per imprimir els valors de l'array
    for ($i = 0; $i < 10; $i++) {
        //condicions d'impressió
        if ($restaurant[$i]==5) {
            echo "<li>La taula ". $i ." està plena  </li>";
        }
        else if ($restaurant[$i]==0) {
            echo "<li>La taula ". $i ." està buida  </li>";
        }
        else{
            
                echo "<li>La taula ". $i ." té ".$restaurant[$i]." comensals  </li>";
            
        }
    }
   







?>


<br>
<br>
<?php

$hotel = array();

//emplenar l'hotel amb doble bucle de numero rand de persones
for ($planta = 0; $planta < 5; $planta++) {
    for ($habitacion = 0; $habitacion < 10; $habitacion++) {
        $hotel[$planta][$habitacion] = rand(0, 4);
    }
}

// iterar bucle i mostrar output
for ($planta = 0; $planta < 5; $planta++) {
    for ($habitacion = 0; $habitacion < 10; $habitacion++) {
        $numClientes = $hotel[$planta][$habitacion];
        echo "<li>";
        if ($numClientes == 0) {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " està buida";
        } elseif ($numClientes == 4) {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " està plena";
        } else {
            echo "A l'habitació " . ($habitacion+1) . " de la planta " . ($planta+1) . " té " . $numClientes . " persones";
        }
        echo "</li>";
    }
}


?>
    
</body>
</html>