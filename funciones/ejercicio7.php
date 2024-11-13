<?php
    /* 
    scribe una función que reciba un precio y un descuento 
    y devuelva el precio una vez aplicado el descuento.
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
        function descuento(float $precio, float $descuento):float{
            return ($precio*(1-$descuento/100));
        }

        //Ejemplo de aplicación
        $precio=120;
        $descuento=20;
        echo "precio= $precio descuento= $descuento % precio rebabajado= ". descuento($precio,$descuento);
    ?>

</body>
</html>