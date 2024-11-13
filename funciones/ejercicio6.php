<?php
/* Escribe una función que calcule el promedio y la mediana de un array de números. 
La función debe recibir el array y devolver un array con el promedio y la mediana.*/
?>


<?php
    //genero la funcion
    function calcular(array $numeros): array {
        
        //calculo la mediana
        //Se ordenan los numeros y se toma el del medio. si es una cantidad impar, el del medio, 
        //si es par se suman los dos del medio y se divide por dos

        //caso especial array vacio
        $cantidad=count($numeros);
        if ($cantidad==0){return ["promedio"=>null,"mediana" =>null];} 

        sort($numeros);//ordeno los numeros
        if ($cantidad%2==0){
            //hay un numero par de numeros
            $mediana = ($numeros[$cantidad / 2 - 1] + $numeros[$cantidad / 2])/2;

        }else {
            //Es un numero impar
            //https://forkful.ai/es/php/numbers/rounding-numbers/
            
            $mediana=$numeros[floor($cantidad/2)];
        }


        //Calculo el promedio
        $promedio=array_sum($numeros)/count($numeros);
        //Devuelvo el array  asociativo
        return ["promedio"=>$promedio,"mediana" =>$mediana];


    }
?>

<?php
    //uso de la funcion
    $datos=[1,2,6,2];
    var_dump($datos);
    echo "<br>";
    echo "promedio ". calcular($datos)["promedio"]."<br>";
    echo "mediana ". calcular($datos)["mediana"]. "<br>"

?>