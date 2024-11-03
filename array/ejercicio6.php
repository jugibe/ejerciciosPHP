<?php
/* 
    Recorrer un array asociativo: Crea un array asociativo con los nombres y edades de 5 personas.
     Escribe un script que recorra el array y muestre cada nombre y su edad en una línea nueva.
     (voy a imprimirlos en una lista)
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
    // Crea un array asociativo con los nombres y edades de 5 personas
    $personas = [
        "Juan" => 25,
        "María" => 30,
        "Pedro" => 20,
        "Lucía" => 35,
        "Ana" => 28
    ];

    // Imprime el array como una lista.
    //puedes aplicar formato en tu css
    echo "<ul>";
    foreach ($personas as $nombre => $edad) {
        echo "<li>$nombre tiene $edad años</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>