<?php
$message = "Login: ".$_POST["login"]." "."Comment: ".$_POST["comment"];

// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()


// Отправляем
mail('e.dyomin97@gmail.com', 'Login and Comment', $message);
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
<form method="POST">
<p>Login: </p>
<input type="text" name="login">
<p>Comment: </p>
<textarea name="comment" rows="10" cols = "15"></textarea>
<p>
    <input type="submit" name="send" value="Send">
</p>
</form>
</body>
</html>
