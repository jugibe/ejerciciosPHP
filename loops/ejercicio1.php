<?php
/*
Crea un programa en php que genere 20 números aleatorios entre 1 y 6 y los muestre por pantalla.
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
        //bucle que repite 20 veces
        for($contador=1;$contador<=20;$contador++){
            echo "orden : $contador el numero generado es " . rand(1,6) . "<br>";
        } 
    ?>
</body>
</html>