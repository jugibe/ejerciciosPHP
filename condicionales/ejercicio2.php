<?php
    /*
    Crea un programa en php con dos variables $n1 y $n2 aleatorias entre 0 y 20. 
    el programa debe escribir los valores e indicar un mensaje $n1 es mayor que $n2, $n2 es mayor que $n1 o bien que son iguales.
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
        $numero1=rand(0,20);
        $numero2=rand(0,20);
        echo "numero1 vale $numero1 <br>";
        echo "numero2 vale $numero2 <br>";
        if ($numero1>$numero2){
            echo "El $numero1 es mayor <br>";

        }elseif($numero1==$numero2){
            echo "los numeros son iguales <br>";
        }else{
            echo "El numero $numero2 es mayor <br>";
        }
        
        ?>

</body>
</html>