<?php

$viaxes = [];
$viaxes[0] = array("Madrid", "Segovia", 90201);
$viaxes[1] = array("Madrid", "A Coruña", 596887);
$viaxes[2] = array("Barcelona", "Cádiz", 1152669);
$viaxes[3] = array("Bilbao", "Valencia", 622233);
$viaxes[4] = array("Sevilla", "Santander", 832067);
$viaxes[5] = array("Oviedo", "Badajoz", 682429);

?>

<!DOCTYPE html>
<html lang="es">
    <link rel="stylesheet" type="text/css" href="estilos.css">
<head>
    <meta charset="UTF-8">
    <title>Viaxe</title>
</head>
<body>
    <h1>Viaxe</h1>
    <div>
    <table>
        <tr class="marco" >
            <td class="t">Orixe</td>
            <td class="t">Destino</td>
            <td class="t">Distancia(km)</td>
        </tr>
    <?php
        foreach($viaxes as $viaxe=>$values){
            echo "<tr>";
            foreach($values as $value){
                if(is_numeric($value)){
                    $val =$value/1000;
                    echo "<td class=\"t\">$val</td>";
                }else{
                    echo "<td class=\"t\">$value</td>";
                }
            }
            echo"</tr>";

        }

    ?>
    </table>
    </div>
    <?php
    $max = 0;
    $max_arr = [];
        foreach($viaxes as $viaxe=> $values){
            foreach($values as $value){
                if(is_numeric($value)){
                    if($value > $max){
                        $max = $value;
                        $max_arr = array($values[0],$values[1],$values[2]/1000);
                    }
                }
            }
            
        }
        echo "<p>O traxecto máis longo é de $max_arr[0] a $max_arr[1] con 
        $max_arr[2] kms</p>";
    
    ?>
</body>
</html>