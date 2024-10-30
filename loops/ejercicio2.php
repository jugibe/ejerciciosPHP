<?php 
/*
Crea un programa que simule el lanzamiento de un dado 10 veces. 
Cada lanzamiento debe mostrar el numero de lanzamiento, el valor del dado y la suma acumulada.
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
        //creo variables
        $suma=0;
        //lanzo 10 veces el dado
        for ($numerolanzamiento=1;$numerolanzamiento<=10;$numerolanzamiento++){
            $valor=rand(1,6); //lanzo el dado
            echo "Lanzamiento $numerolanzamiento valor = $valor "; //imprimo el valor y el lanzamiento
            $suma+=$valor; //acumulo valor
            echo"la suma acumulada vale $suma <br>";        
        }

        //Al salir del for imprimo el resultado final
        echo" <br><br> fin  de programa <br> 
                    he lanzado el dado $numerolanzamiento veces <br>
                 la suma total vale $suma";


    ?>
</body>
</html>