
<?php 
    /*
    Crea un programa en php con una variable $numero con un valor aleatoria entre -10 y 10. El programa debe escribir un mensaje indicando s
    i número es positivo, negativo o cero.
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
        $numero=rand(-10,10);//genero un numero entre -1o y 10
        print "El numero a analizar es $numero <br>";
        if ($numero>0){
            echo "El numero $numero es positivo <br>";

        }elseif($numero==0){
            echo "El numero $numero tiene valor cero <br>";
        }else{
            echo "El numero $numero es negativo <br>";
        }

    ?>
</body>
</html>