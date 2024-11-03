<php
    \*
    Añadir elementos a un array numérico: Crea un array vacío. 
    Añade cinco nombres de ciudades al array y muestra el array completo en pantalla.
    *\
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
        //declaro el array
         $ciudades=[];
         //añado ciudades 
         array_push($ciudades, "Zaragoza", "Huesca","Teruel","Calatayud","Tarazona");//se añaden al final
    ?>

    <table border="1">
        
    <?php
        //imprimir el array en una tabla
        //Se pueden definir estilos en una hoja css
        echo "<tr><th>CIUDADES</th></tr>";
        foreach($ciudades as $v){
            echo "<tr> <td>$v </td></tr>";
        }
    ?>
    </table>
    
</body>
</html>