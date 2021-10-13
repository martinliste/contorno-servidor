<?php

$puntos = array("ana"=>123, "belen"=>12,"felipe"=>3,"moncho"=>245,"arthur"=>10);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 2 Folla 2.8</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<table>
    <tr>
        <td>Nome da función</td>
        <td>Explicación</td>
        <td>Exemplo</td>
        <td>Mostra por pantalla</td>
    </tr>
    <tr>
        <td>asort()</td>
        <td>Ordena un array de menor a maior mantendo a asociación do elemento co seu índice</td>
        <td>asort($puntos)</td>
        <td><?php echo asort($puntos);?></td>
    </tr>
   
</table>
    
</body>
</html>