<?php
    $comunidades = ["Andalucía" => 593.6,
                    "Aragon" => 600.3,
                    "Baleares" => 489.7,
                    "Canarias" => 573.2,
                    "Cantabria" => 551.5,
                    "Castilla e Leon" => 645.3,
                    "Cataluña" => 569.3,
                    "Comunidade Valenciana" => 561.1,
                    "Extremadura" => 584.3,
                    "Galicia" => 600.1];    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="table.css">
    <title>Título de la página</title>
</head>
<body>
    <table>
        <tr class="marco">
            <td >Comunidade</td>
            <td>Escolarización por 100 Habitantes</td>
            <td>%Escolariazción</td>
        </tr>
        <?php
            $numero = 1;
            foreach($comunidades as $comunidade=>$escolarizacion){
                if($numero %2 == 0){
                    //IMPAR
                    echo '<tr class="even">';
                    echo "<td>$comunidade</td><td>$escolarizacion</td><td>"
                    .(($escolarizacion*100)/1000)."</td>";
                    echo "</tr>";
                }else{
                    echo '<tr class="odd">';
                    echo "<td>$comunidade</td><td>$escolarizacion</td><td>"
                    .(($escolarizacion*100)/1000)."</td></tr>";
                }
                $numero++;
            }
        ?>

    </table>
</body>
</html>