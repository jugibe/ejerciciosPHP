<?php
/*
Crea un programa en php que genere un numero aleatorio entre 1 y 7. 
El programa debe mostrar el numero y el día de la semana siendo el lunes el día 1 y el domingo el 7.
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
// Generar un número aleatorio entre 1 y 7
$numero = rand(1, 7);

// Mostrar el número generado
echo "El número generado es: $numero<br>";

// Determinar el día de la semana usando switch
switch ($numero) {
    case 1:
        echo "El día de la semana es: Lunes";
        break;
    case 2:
        echo "El día de la semana es: Martes";
        break;
    case 3:
        echo "El día de la semana es: Miércoles";
        break;
    case 4:
        echo "El día de la semana es: Jueves";
        break;
    case 5:
        echo "El día de la semana es: Viernes";
        break;
    case 6:
        echo "El día de la semana es: Sábado";
        break;
    case 7:
        echo "El día de la semana es: Domingo";
        break;
    default:
        echo "Número fuera de rango";
        break;
}
?>

</body>
</html>
