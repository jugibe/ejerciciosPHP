<?php
/*
   Borrar un elemento específico de un array asociativo:
   Crea un array asociativo con 4 marcas de autos y sus países de origen. 
   Borra uno de los pares del array y muestra el array actualizado en una tabla HTML con cabeceras "Marca" y "País de Origen".
   Muestro los datos ants y despue sd emodificar en una tabla.
   uso estilos css y clases css
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas de Autos y Países de Origen</title>
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
    // Crear un array asociativo con 4 marcas de autos y sus países de origen
    $autos = [
        "Toyota" => "Japón",
        "BMW" => "Alemania",
        "Ford" => "EEUU",
        "Renault" => "Francia"
    ];

    // Mostrar la tabla original
    echo "<div class='titulo'>Tabla Original</div>";
    echo "<table>";
    echo "<tr><th>Marca</th><th>País de Origen</th></tr>"; // Cabeceras de la tabla
    foreach ($autos as $marca => $pais) {
        echo "<tr><td>$marca</td><td>$pais</td></tr>";
    }
    echo "</table>";

    // Borrar uno de los pares del array
    unset($autos["Ford"]); // Borra "Ford"

    // Mostrar la tabla actualizada
    echo "<div class='titulo'>Tabla Actualizada</div>";
    echo "<table>";
    echo "<tr><th>Marca</th><th>País de Origen</th></tr>"; // Cabeceras de la tabla
    foreach ($autos as $marca => $pais) {
        echo "<tr><td>$marca</td><td>$pais</td></tr>";
    }
    echo "</table>";
    ?>
</body>
</html>
