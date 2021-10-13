<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="table.css">
    <title>Título de la página</title>
</head>
<body>
    <table>
        <tr>
            <td>Alumno</td>
            <td>Soldo</td>
        </tr>
    <?php
        $soldos = ["alumno1" => 150.0, 
                   "alumno2" => 157.4,
                   "alumno3" => 300.0,
                   "alumno4" => 250.6,
                   "alumno5" => 222.2];


        foreach($soldos as $key=>$value){
            echo "<tr>";
            echo "<td>".$key."</td><td>".$value."</td>";
            echo"</td>";
        }
        $maximo = $soldos["alumno1"];
        foreach($soldos as $key=>$value){
           if($value > $maximo){
               $maximo = $value;
           }
        }
        echo "<tr>";
        echo "<td>Maximo</td><td>$maximo</td>";
        echo "</tr>";

    ?>
    </table>

</body>
</html>