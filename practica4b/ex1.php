<?php

$elementos = array(
    "Alcalinos"=>array("Li"=>3, "Na"=>11,"K"=>19, "Rb"=>37, "Cs" =>55,
    "Fr" => 87),
    "Alcalino-terreo"=>array("Be"=>4,"Mg"=>12,"Ca"=>20,"Sr"=>38,
    "Ba"=>56,"Ra"=>88),
    "Terreos" => array("B"=>5, "Al"=>13,"Ga"=>31,"In"=>49,"Ti"=>81)
);
if(!isset($_GET['submited'])){

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ud 2 - Tabla Periódica</title>
</head>
<body>
    <form method="get">
        <label for="tipo">Seleccione el grupo que desea consultar: </label>
        <select name="grupo">
            <?php
                foreach($elementos as $grupo=>$values){
                    echo '<option name="$grupo">'.$grupo.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="submited">
    </form>
    
</body>
</html>
<?php
}else{
    
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>U2- Tabla Periódica</title>
</head>
<body>
    <?php
        echo "<h1>Táboa periódica dos elementos</h1>";
        echo "<hr/>";
        echo '<p>O grupo "'.$_GET["grupo"].'" está formado polos seguintes elementos</p>';
    ?>

    <table>
        <tr>
            <td>Nombre</td>
            <td>Nº Atómico</td>
        </tr>
    <?php
    $total= 0;
        foreach($elementos[$_GET['grupo']] as $nome=>$atomico){
            $total++;
            echo "<tr>";
            echo "<td>$nome</td><td>$atomico</td></tr>";
        }


    ?>
    </table>
</body>
</html>
<?php
    echo "<p class=\"max\">Total de elementos: $total</p>";
}
?>