<?php

/*
Realiza una función que reciba como parámetro una contraseña y devuelva un booleano indicando si es valida o no. 
Contraseña válida mas de 8 caracteres y al menos un carácter no numérico y mayúsculas y minúsculas.
*/

function password_valida(string $password ):bool{
    $caracteres_especiales="@#$%&-";
    if (strlen($password)<8) return false;
    if (!preg_match("/[A-Z]/",$password)) return false;
    if (!preg_match("/[a-z]/",$password)) return false;
    if (!preg_match("/[0-9]/",$password)) return false;
    if (!preg_match("/[@#$%&-]/",$password)) return false;
    return true;

}

//Ejemplo de palicación
$c="1w23Aff";
echo $c;
if (password_valida($c)){
    echo " Es valida  ";}
else {echo "no es valida";}

?>