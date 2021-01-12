<?php
echo("Имя пользователя: ".$_POST["name"]);
echo "<br/>";
echo("Комментарий: ".$_POST["comment"]);
echo "<br />";
echo("Страна: ".$_POST["country"]);
echo "<br />";
echo("Язык: ".$_POST["language"]);
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
<form method="post">
    <p>Введите Ваше имя:</p>
    <input type = "text" name = "name">
    <p>Введите комментарий:</p>
    <textarea cols = '25'  rows = '8' name = "comment"></textarea>
    <p>Выберите страну:</p>
    <input type = "checkbox" name = "country" value = "Russia">Russia
    <input type = "checkbox" name = "country" value = "France">France
    <input type = "checkbox" name = "country" value = "Germany">Germany
    <p>Выберите язык:</p>
    <input type = "radio" name = "language" value = "Russian">Russian
    <input type = "radio" name = "language" value = "German">German
    <input type = "radio" name = "language" value = "French">French
    <p>
    <input type = "submit" name = "send" value = "send">
    </p>

</form>

</body>
</html>
