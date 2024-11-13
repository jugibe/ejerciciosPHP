<?php
/* Escribe una función en PHP que convierta grados Celsius en Fahrenheit y viceversa. 
La función debe recibir el número y la escala (C o F). 
Si la escala es "C", convierte de Celsius a Fahrenheit usando la fórmula F=C×9/5+32.

Si la escala es "F", convierte de Fahrenheit a Celsius usando la fórmula C=(F−32)×5/9.

Si la escala no es válida, devuelve un mensaje de error.

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

    // Función para convertir grados Celsius a Fahrenheit y viceversa
    function convertirTemperatura($valor, $escala)
    {
        if ($escala == "C") { // Convertir de Celsius a Fahrenheit
            $resultado = $valor * 9 / 5 + 32;
            $nuevaEscala = "F";
        } elseif ($escala == "F") { // Convertir de Fahrenheit a Celsius
            $resultado = ($valor - 32) * 5 / 9;
            $nuevaEscala = "C";
        } else { // Escala no válida
            return "Error: Escala no válida. Usa 'C' para Celsius o 'F' para Fahrenheit."; //al hacer un return sale de la función
        }

        return "$valor grados $escala son $resultado grados $nuevaEscala."; //devuelve un string con el resultado

    }
    // Ejemplo de uso
    echo convertirTemperatura(25, "C") . "<br>";
    // Debería devolver 25 grados C son 77 grados F.
    echo convertirTemperatura(77, "F") . "<br>";
    // Debería devolver 77 grados F son 25 grados C. 
    ?>

</body>

</html>