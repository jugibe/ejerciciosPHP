<?php
/*
   Añadir elementos a un array asociativo:
   Crea un array asociativo vacío. Añade tres pares de clave-valor (nombre de país y capital) al array
   y muestra el array completo en una tabla HTML con cabeceras "País" y "Capital".
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países y Capitales</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:nth-child(odd) {
            background-color: #fff;
        }

        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <?php
    // Crear un array asociativo vacío
    $paises = [];

    // Añadir tres pares de clave-valor al array
    $paises["España"] = "Madrid"; // Añade "España" como clave y "Madrid" como valor
    $paises["Francia"] = "París"; // Añade "Francia" como clave y "París" como valor
    $paises["Italia"] = "Roma";   // Añade "Italia" como clave y "Roma" como valor

    // Mostrar el array completo en una tabla HTML
    echo "<table>";
    echo "<tr><th>País</th><th>Capital</th></tr>"; // Cabeceras de la tabla
    foreach ($paises as $pais => $capital) {
        echo "<tr><td>$pais</td><td>$capital</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
