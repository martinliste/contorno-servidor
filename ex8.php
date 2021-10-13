<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="list_ex8.php" method="post">
        <label for="fname_sname">Nome e Apelidos:</label>
        <input type="text" name="fname_sname"></br>

        <label for="email">Email:</label>
        <input type="email" name="email"></br>

        <label for="exp">Experiencia:</label>
        <input type="checkbox" name="exp" id="musico" value="Musico">Musico
        <input type="checkbox" name="exp" id="comico" value="Comico"> Comico
        <input type="checkbox" name="exp" id="actor" value="Actor"> Actor</br>

        <label for="idade">Indica a túa idade: </label>
        <input type="radio" name="idade" id="menor" value="menor">Entre 20  40 anos
        <input type="radio" name="idade" id="maior" value="maior">Mais de 40 anos</br>

        <label for="status">Como atopaches a páxina: </label>
        <select name="status" id="stat">
            <option value="val1">De Casualidade</option>
            <option value="val2">polo Google</option>
            <option value="val3">coñecida da familia</option>
        </select>
        </br>

        <label for="comment">Os teus comentarios:</label></br>
        <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
        <input type="submit">

    </form>
    
</body>
</html>