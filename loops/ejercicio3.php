<?php 
/*
Crea un programa igual que el anterior pero que lance el dado mientras la suma total sea menor que 100.
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
        //creo variables
        $suma=0;echo($suma);
        $numerolanzamiento=0;
        while($suma<=100){
            echo("kk");
            //entro en el bucle
            $numerolanzamiento++;//sumo uno al contador
            $valor=rand(1,6);//genero el nuumero
            $suma+=$valor; //acumulo suma

            //imprimo resultados
            echo "He lanzado el dado $numerolanzamiento veces valor =$valor suma =$suma <br>";  
            //pantear como tratar el ultimoo caso, no imprimir, 

        }
    ?>
</body>
</html>