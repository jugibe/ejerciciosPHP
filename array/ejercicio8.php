<?php
/*
   Modificar un elemento específico de un array asociativo:
   Crea un array asociativo con los nombres de 4 países y sus capitales. 
   Modifica la capital de uno de los países y muestra el array actualizado.
   Este sin html, solo php
*/

// Crear un array asociativo con los nombres de 4 países y sus capitales
$paises = [
    "España" => "Madrid",
    "Francia" => "París",
    "Italia" => "Milan",
    "Alemania" => "Berlín"
];
//imprimo el array
echo "<br>paises y capitales<br>";

print_r($paises);
// Modificar la capital de uno de los países
$paises["Italia"] = "Roma"; // Cambia la capital de Italia

echo "<br>paises y capitales corregido<br>";

// Mostrar el array actualizado
print_r($paises);
?>
