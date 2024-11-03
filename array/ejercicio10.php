<?php
/*
   Ordenar un array asociativo por clave:
   Crea un array asociativo con 5 nombres de empleados y sus salarios. 
   Ordena el array por nombre en orden ascendente y muestra el array ordenado en una tabla HTML con cabeceras "Nombre" y "Salario".
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados y Salarios</title>
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

        .titulo {
            text-align: center;
            font-weight: bold;
            margin: 20px;
        }
    </style>
</head>
<body>
    <?php
    // Crear un array asociativo con los nombres de 5 empleados y sus salarios
    $empleados = [
        "Carlos" => 2500,
        "Ana" => 3200,
        "Pedro" => 2800,
        "Lucía" => 3100,
        "Marcos" => 2900
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Salario</th></tr>"; // Cabeceras de la tabla
    foreach ($empleados as $nombre => $salario) {
        echo "<tr><td>$nombre</td><td>$salario</td></tr>";
    }
    echo "</table>";

    // Ordenar el array por nombre en orden ascendente
    ksort($empleados);

    // Mostrar la tabla ordenada
    echo "<div class='titulo'>Tabla Ordenada por Nombre</div>";
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Salario</th></tr>"; // Cabeceras de la tabla
    foreach ($empleados as $nombre => $salario) {
        echo "<tr><td>$nombre</td><td>$salario</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
