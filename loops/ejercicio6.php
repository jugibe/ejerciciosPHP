<?php
    /*
    Crea un programa con una variable $n1 a la que daremos valor en el código. 
    El programa mostrará todos los divisores de ese número.

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

    $n1=2563; //numero a calcular los divisores
    echo "Los divisores de ". abs($n1) . " son <br>";

    for($contador=abs($n1);$contador>=1;$contador--){
        if (abs($n1)% $contador ==0){
            echo $contador!=1? "$contador, ": "$contador .";
        }     
        
    }

    ?>
</body>
</html>