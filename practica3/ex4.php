<?php

$soldos = array("alumno1" => 150.0,
                "alumno2" => 200.0,
                "alumno3" => 300.2,
                "alumno4" => 430.2,
                "alumno5" => 202.2);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
</head>
<body>
    <?php
    $soldoMin=$soldos["alumno1"];
    foreach($soldos as $alumno=>$soldo){
        if($soldo < $soldoMin){
            $soldoMin = $soldo;
        }
    }
    echo "Soldo minimo: $soldoMin</br>";

    $soldoMax = $soldo["alumno1"];
    foreach($soldos as $key=>$value){
        if($value > $soldoMax){
            $soldoMax = $value;
        }
    }
    echo "Soldo Máximo: $soldoMax</br>";
    ?>
</body>
</html>