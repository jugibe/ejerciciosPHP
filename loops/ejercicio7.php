<?php
    /*
    Crea un programa con una variable $n1 a la que daremos valor en el código. 
    El programa mostrará todos los divisores de ese número e indicará si el numero es primo o no.

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $n1=1736; //numero a calcular los divisores
    $numerodivisores=0; //variable que almacena el numero de divisores, si tiene dos es primo
    echo "Los divisores de ". abs($n1) . " son <br>";

    for($contador=abs($n1);$contador>=1;$contador--){
        if (abs($n1)% $contador ==0){
            echo $contador!=1? "$contador, ": "$contador.<br>";
            $numerodivisores ++;
        }     
        
    }

    //Si el numero de divisores es 2 el numero es primo
    echo "$n1 tiene $numerodivisores divisores.<br>";
    echo $numerodivisores==2 ? "$n1 es primo <br>":"$n1 no es primo <br>";

    ?>
</body>
</html>