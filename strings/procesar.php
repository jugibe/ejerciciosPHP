<?php
/*
    Muestre un mensaje de bienvenida "Bienvenido nombre apellido"
    Escriba el nombre y el apellido al revés
    Cuente las letras del nombre, del apellido y las totales.
    Escriba nombre y apellido en mayúsculas
    Imprimir el primer y ultimo carácter del nombre y el apellido
    Cambiar todas las vocales del nombre y el apellido por la u
*/



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    //mensaje de bienvenida
    echo "Bienvenido " . $nombre . "  " . $apellido . "<br>";
    // nombre al revesnombre 
    echo " tu nombre al reves es " . strrev($nombre . " " . $apellido) . "<br>";
    //En mayusculas
    echo "tu nombre y apellido en MAYUSCULAS  es "  . strtoupper($nombre . " " . $apellido) . "<br>";
    //primer caracter del nombre
    echo "El primer caracter del nombre es " . $nombre[0] ."<br>";
    //ultimo caracer del apellido
    echo "El ultimo caracter del apellido es " . $apellido[strlen($apellido)-1] ."<br>";
    //cambiar las vocales or la u (lo voy a pasar a mayusculas)
    $texto=strtoupper($nombre . " " . $apellido);
    // $texto=str_replace("A","U",$texto);//y asi con todas
    // $texto=str_replace("E","U",$texto);
    // $texto=str_replace("I","U",$texto);
    // $texto=str_replace("O","U",$texto);
    // https://www.php.net/manual/en/function.str-replace.php

    //cambiar todas de vez
    $texto=str_replace(["A","E","I","O"],"U",$texto);//y asi con todas

    echo "tu nombre con la U " . $texto . "<br>";
    
}
