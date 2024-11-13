<?php 
/* Escribe una función que reciba una serie de números como parámetro, 
la cantidad de números puede ser variable, y devuelva el número que más veces aparece.*/


function cuenta_numeros(array $numeros){

    // Contar la frecuencia de cada número 
    //genera un array asociativo valor=>frecuencia;
    //https://www.php.net/manual/en/function.array-count-values.php
    $frecuencias = array_count_values($numeros); 
    // Encontrar la mayor frecuencia 
    //Encontrar la frecuencia máxima 
    $maxfrecuencia = max($frecuencias); 
    $numero_mas_frecuente=array_search($maxfrecuencia,$frecuencias);
    return $numero_mas_frecuente;


}

$num=[1,2,3,3,2,2,3,3,4,4,4,4,4,4,4,4];
print_r($num);
echo "<br>";
echo "numero mas frecuente ". cuenta_numeros($num). "<br>";
//modificar para que diga el numero y la frecuencia y si hay varios numeros con la frecuencia máxima que aparezcan todos

?>