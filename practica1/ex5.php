<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="fic.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Número</td>
            <td>Multiplicando</td>
            <td>Resultado</td>
        </tr>
        
    <?php
        for($i=1; $i<=10; $i++){
            echo "
                <tr>
                    <td>7</td>
                    <td>7 X $i</td>
                    <td>".(7*$i)."</td>
                </tr>
            ";
        }

    ?>
        
    </table>
</body>
</html>