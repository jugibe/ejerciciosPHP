<?php
/* Ejemplo de solictar una peticion get a una APIREST 
Ahora le solicitamos un elemento concreto que devuelve en un json 
transformarlo en datos
Este php seria el cliente del API REST
*/

$url = "https://jsonplaceholder.typicode.com/posts/2";
//URL de la API. si ejecutamos esto en le navegador 
//nos devolvera un archivo JSON con los datos de la entidad posts con id=2
//ejecuta en el navegador y analiza la respuesta. Ver archivo

// Realizar la solicitud GET
$response = file_get_contents($url); //forma facil

//las peticiones http se realizan de forma más completa usando curl, permite ver cabeceras,...

// Verificar si la solicitud fue exitosa
if ($response === false) {
    die("Error al realizar la solicitud a la API.");
}

//convertir en un array asociativo
$data = json_decode($response, true);
// Verificar si la conversión fue exitosa
if (json_last_error() !== JSON_ERROR_NONE) {
    die("Error al procesar la respuesta JSON: " . json_last_error_msg());
}
//prueba a imprimir $data 
var_dump($data);
//Mejor imprimirlo en php

//mostrar datos
// Mostrar los datos en una tabla HTML
echo "<h1>Publicaciones</h1>";
echo "<table border='1' cellpadding='10' cellspacing='0'>
        <thead>
            <tr>
                <th>ID de la Publicación</th>
                <th>ID del Usuario</th>
                <th>Título</th>
                <th>Contenido</th>
            </tr>
        </thead>
        <tbody>";

//La unica diferencia de antes es que ahora no puedo recorrer con un for each
// ya que solo tengo un elemento
echo "<tr>
            <td>" . htmlspecialchars($data['id']) . "</td>
            <td>" . htmlspecialchars($data['userId']) . "</td>
            <td>" . htmlspecialchars($data['title']) . "</td>
            <td>" . htmlspecialchars($data['body']) . "</td>
        </tr>";


echo "</tbody></table>";
