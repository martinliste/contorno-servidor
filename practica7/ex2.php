<?php
if(!isset($_GET['submit'])){

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>EX 2 Folla 2.7</title>
</head>
<body>
    <form method="get">
    <label for="cadea">Introducir cadea</label>
    <input type="text" name="cadea" value="cadea"></br>
    <label for="funcion">Opcions:</label>
    <select name="funcion">
        <option value="stripslashes">stripslashes</option>
        <option value="urlencode">urlencode</option>
        <option value="urldecode">urldecode</option>
        <option value="nl2br">nl2br</option>
    </select></br>
    <input type="submit" name="submit">
    </form>
    
</body>
</html>

<?php
}else{

$cadea = $_GET['cadea'];
//========= FUNCTIONS =========\\

if($_GET['funcion'] == "stripslashes"){
    echo $cadea."</br>";
    echo $_GET['funcion']."</br>";
    echo stripslashes($cadea);
}

if($_GET['funcion'] == "urlencode"){
    echo $cadea."</br>";
    echo $_GET["funcion"]."</br>";
    echo urlencode($cadea);
}

if($_GET['funcion'] == "urldecode"){
    echo $cadea."</br>";
    echo $_GET["funcion"]."</br>";
    echo urldecode($cadea);
}
if($_GET['funcion'] == "nl2br"){
    echo $cadea."</br>";
    echo $_GET["funcion"]."</br>";
    echo nl2br($cadea);
}



}
?>