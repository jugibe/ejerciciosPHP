<?php
    /* Escribe una función que genere una contraseña aleatoria. 
    Longitud entre 8 y 12 caracteres, al menos un carácter entre "@#$%&-". */
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
    function genera_password():string {
        $password="";
        $longitud=rand(8,12);//genero la longitud
        $caracteres_especiales="@#$%&-";
        $numeros="0123459789";
        $letras="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

        //aádo un numero y un caracter especial
        $password.=$caracteres_especiales[rand(0,strlen($caracteres_especiales)-1)];
        $password.=$numeros[rand(0,strlen($numeros)-1)];
        //completo con letras
        for($c=strlen($password);$c<$longitud;$c++){
            $password.=$letras[rand(0,strlen($letras)-1)];
        }

        //ahora mezclo la cadena
        
         $password=str_shuffle($password);
         //https://www.php.net/manual/en/function.str-shuffle.php

        return $password;

    }//fin de la funcion

    //Ejemplo de uso genero 10 contraseñas
    for ($c=0;$c<10;$c++){
        echo genera_password()."<br>";

    }


?>

</body>
</html>