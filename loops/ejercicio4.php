<?php 
/*
Crea un programa con una variable aleatoria entre  1 y 50 
y que escriba la tabla de multiplicar de dicho número.
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
        $numero=rand(1,50); //genero el numero
        //escribo su tabla
        echo "Tabla de $numero <br>";
        for ($c=1;$c<=10;$c++){
            echo "$numero x $c = " . ($numero*$c) . "<br>";

        }



    ?>
</body>
</html>