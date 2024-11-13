<?php
/*
Genera una función que reciba como parámetro un número y devuelva un booleano indicando si es primo o no.
 Utiliza la función para calcular todos los primos entre uno y un millón.
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
        //copio el bucle del ejercicio de los primos
        //Genero la función
        function es_primo($n1):bool{
            $numerodivisores=0;

            for($contador=abs($n1);$contador>=1;$contador--){
                if (abs($n1)% $contador ==0){
                    $numerodivisores ++;
                }     
                
            }
            return ($numerodivisores==2); //Devuelvo el resiltado de la concición, ya es un booleano
            
        }


    ?>

    <?php  
        //imprimo los numeros primos hasta 100
 
        for ($numero =1;$numero<100;$numero++){
            echo es_primo($numero)?"$numero es primo <br>":"";
        }
    ?>
</body>
</html>