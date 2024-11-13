<?php
    /* Escribe una función que calcule el área y el perímetro de un rectángulo. 
    La función debe recibir el largo y el ancho como parámetros y devolver un array con el área y el perímetro.*/
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

    // funcion que alcula el area y el perímetro
    function area_perimetro($largo, $ancho):array{
        $area=$largo*$ancho;
        $perimetro=2*$largo+2*$ancho;
        return ["area"=>$area,"perimetro"=>$perimetro];

        //se puede poner en una sola instruccion
        //return ["area"=>$largo*$ancho,"perimetro"=>2*$largo+2*$ancho];


    }
    //Ejemplo de uso
    $resultado=area_perimetro(10,14);
    echo "El area vale {$resultado['area'] }<br>"; //{} delimintan variables y asi evita el problema del uso de comillas
    echo "El perimetro vale {$resultado['perimetro'] }<br>";

    ?>
</body>
</html>