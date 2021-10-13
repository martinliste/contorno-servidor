<?php

$cadea = "Hoxe estamos nun 'día de outubro' chove, chove!!";
$cadea3 = "Hoxe estamos nun 'día de outubro' chove, chove!!";
$cadea2 = "Hoxe estamos nun 'día de setemvto' frio e chove!!";
$cadea4 = "Aoxe estamos nun 'día de outubro' chove, chove!!";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 1 Folla 2.7</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<table>
    <tr>
        <td>Nome da función</td>
        <td>Explicación</td>
        <td>Exemplo</td>
    </tr>
    <tr>
        <td>strlen()</td>
        <td>Devolve o número de caracteres da cadea</td>
        <td><?php echo strlen($cadea)." caracteres" ?></td>
    </tr>
    <tr>
        <td>substr()</td>
        <td>Devolve unha subcadea, empezando polo número indicado o final</td>
        <td><?php echo substr($cadea,10); ?></td>
    </tr>
    <tr>
        <td>strstr()</td>
        <td>Devolve a cadea dende a primeira aparición da cadea pasada</td>
        <td><?php echo strstr($cadea,"día"); ?></td>
    </tr>
    <tr>
        <td>strchr()</td>
        <td>Devolve a cadea dende a primeira aparición da letra indicada</td>
        <td><?php echo strchr($cadea,'e'); ?></td>
    </tr>
    <tr>
        <td>strrchr()</td>
        <td>Devolve a cadea dende a última aparición da palabra indicada</td>
        <td><?php echo strrchr($cadea,"chove"); ?></td>
    </tr>
    <tr>
        <td>strpos()</td>
        <td>Devolve a posicion numérica da primeira aparición</td>
        <td><?php echo strpos($cadea,"chove"); ?></td>
    </tr>
    <tr>
        <td>str_replace()</td>
        <td>Substitúe as aparicións da cadea buscada pola nova na cadea orixinal</td>
        <td><?php echo str_replace("chove","frío",$cadea); ?></td>
    </tr>
    <tr>
        <td>trim()</td>
        <td>Elimina os espazos a ambos lados da cadea</td>
        <td><?php echo trim(" Hai espazos a ambos lados "); ?></td>
    </tr>
    <tr>
        <td>ltrim()</td>
        <td>Elimina os espazos á esquerda da cadea</td>
        <td><?php echo $vacio = ltrim(" Hai espazos a dereita    "); ?></td>
    </tr>
    <tr>
        <td>rtrim()</td>
        <td>Elimina os espazos á dereita da cadea</td>
        <td><?php echo $vacio =rtrim(" Hai espazos á esquerda  "); ?></td>
    </tr>
    <tr>
        <td>strtoupper()</td>
        <td>Pasa a maiúsculas a cadea</td>
        <td><?php echo strtoupper($cadea); ?></td>
    </tr>
    <tr>
        <td>strtolower()</td>
        <td>Pasa a maiúsculas a cadea</td>
        <td><?php echo strtolower($cadea); ?></td>
    </tr>
    <tr>
        <td>ucwords()</td>
        <td>Pasa a maiúsculas a primeira letra de cada palabra da cadea</td>
        <td><?php echo ucwords($cadea); ?></td>
    </tr>
    <tr>
        <td>ucfirst()</td>
        <td>Pasa a maiúsculas a primeira letra da cadea</td>
        <td><?php echo ucfirst($cadea); ?></td>
    </tr>
    <tr>
        <td>strcmp()</td>
        <td>Devolve "<"0 se str1 vai antes alfabéticamente ca str2; devolve ">"= se str2 vai antes 
            que str1; e devolve 0 se son iguais </td>
        <td><?php echo strcmp($cadea,$cadea4); ?></td>
    </tr>
    <tr>
        <td>urlencode()</td>
        <td>Devolve unha cadea codificada para pasar variables a unha páxina php </td>
        <td><?php echo $codi = urlencode($cadea); ?></td>
    </tr>
    <tr>
        <td>urldecode()</td>
        <td>Devolve unha cadea descodificada, se se lle pasa unha codificada </td>
        <td><?php echo urldecode($codi); ?></td>
    </tr>
</table>
    
</body>
</html>