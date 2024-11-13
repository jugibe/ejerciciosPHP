<?php
/*
   Escribe una función que calcule el IMC de una persona dado su peso y altura.
   La función debe devolver el IMC y la categoría correspondiente (bajo peso, peso normal, sobrepeso, obesidad).
*/

// Función para calcular el IMC y su categoría correspondiente
function calcularIMC($peso, $altura) {
    // Calcular el IMC
    $imc = $peso / ($altura * $altura);

    // Determinar la categoría según el IMC
    if ($imc < 18.5) {
        $categoria = "Bajo peso";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        $categoria = "Peso normal";
    } elseif ($imc >= 25 && $imc < 29.9) {
        $categoria = "Sobrepeso";
    } else {
        $categoria = "Obesidad";
    }

    // Devolver el IMC y la categoría en un array asociativo
    
    return ["IMC" => $imc, "Categoría" => $categoria];
}

// Ejemplo de uso
$peso = 70; // Peso en kilogramos
$altura = 1.75; // Altura en metros

$resultado = calcularIMC($peso, $altura);

//numeros con formato https://www.php.net/manual/es/function.number-format.php
echo "El IMC es: " . number_format($resultado["IMC"], 2) . "\n"; 
echo "Categoría: " . $resultado["Categoría"];
?>
