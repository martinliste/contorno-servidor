<?php

$valores = [];

array_push($valores,$_GET["valor1"],$_GET["valor2"],$_GET["valor3"],$_GET["valor4"],
$_GET["valor5"]);

$suma = 0;
foreach($valores as $valor){
    $suma += $valor;
}
echo "La suma de los valores es: $suma</br>";
echo "La media de los valores es: ".$suma/5;
?>