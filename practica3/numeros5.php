<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Título de la página</title>
</head>
<body>
    <?php
    $numeros = [];
    $numeros[0] = intval($_GET["valor1"]);
    $numeros[1] = intval($_GET["valor2"]);
    $numeros[2] = intval($_GET["valor3"]);
    $numeros[3] = intval($_GET["valor4"]);
    $numeros[4] = intval($_GET["valor5"]);

   
    $suma = 0;
    foreach($numeros as $num){
        $suma+=$num;
    }
    echo "</br>";
    echo "Suma: ".$suma;
    
    echo "</br>Producto: ".($suma*5);

    $min = $numeros[0];
    foreach($numeros as $num){
        if($num < $min){
            $min = $num;
        }
    }
    echo "</br>";
    echo "Minimo: ". $min;

    $max = 0;
    foreach($numeros as $num){
        if($num > $max){
            $max = $num;
        }
    }
    echo "</br>Maximo: ".$max;


?>
    
</body>
</html>
