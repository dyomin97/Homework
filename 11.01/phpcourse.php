<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method = "GET">
    <p>Выберите лабораторную: </p>
    <select name="l">
        <option value="1">Лаб1</option>
        <option value="2">Лаб2</option>
        <option value="3">Лаб3</option>
        <option value="4">Лаб4</option>
    </select>

    <p>
        <input type="submit" name="send" value="Send">
    </p>
</form>
</body>
</html>
