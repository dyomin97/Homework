<?php
session_start();
setcookie("last","bitrix.php", time() + 3600*24*7);
if (!isset($_SESSION["account"])) {
    die("ACCESS DENIED");
}
if (isset($_POST["logout"])) {
    header("Location:logout.php");
}
if(isset($_POST["choose"])){
    $_SESSION["background"] = $_POST["colors"];
}

$background = false;

if (isset($_SESSION["background"])) {
    $background = $_SESSION["background"];
}

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
<body style="background:<?echo $background?>">

<h1>Hello, I am bitrix.php</h1>
<form method="POST">
<p>
    <input type = "submit" name = "logout" value = "Log Out">
</p>
</form>
</body>
</html>
