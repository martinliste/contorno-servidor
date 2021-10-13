<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type"text/css" href="fic.css">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Orde</td>
            <td>Impar</td>
        </tr>
        
    <?php
        for($a=1,$i=1; $i<=50; $i+=2,$a++){
            echo "
                <tr>
                    <td>$a</td>
                    <td>$i</td>
                </tr>
            ";
        }

    ?>
        
    </table>
</body>
</html>