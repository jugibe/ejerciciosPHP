<?php
/*
    
Crea un programa en php con tres variables aleatorias $n1,$n2,$n3. 
El programa mostrará sus valores y posteriormente las mostrará los números ordenados de mayor a menor.
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
// Genera tres números aleatorios entre 0 y 10
$n1 = rand(0, 10);
$n2 = rand(0, 10);
$n3 = rand(0, 10);

// Muestra los valores de las variables
echo "Los valores generados son: $n1, $n2, $n3<br>";

// Ordena manualmente los números de mayor a menor
if ($n1 >= $n2 && $n1 >= $n3) {
    if ($n2 >= $n3) {
        echo "Los valores ordenados de mayor a menor son: $n1, $n2, $n3";
    } else {
        echo "Los valores ordenados de mayor a menor son: $n1, $n3, $n2";
    }
} elseif ($n2 >= $n1 && $n2 >= $n3) {
    if ($n1 >= $n3) {
        echo "Los valores ordenados de mayor a menor son: $n2, $n1, $n3";
    } else {
        echo "Los valores ordenados de mayor a menor son: $n2, $n3, $n1";
    }
} else {
    if ($n1 >= $n2) {
        echo "Los valores ordenados de mayor a menor son: $n3, $n1, $n2";
    } else {
        echo "Los valores ordenados de mayor a menor son: $n3, $n2, $n1";
    }
}
?>

</body>
</html>

