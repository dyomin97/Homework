<?php
session_start();
if(!isset($_SESSION["account"])){
    die("Access denied");
}
if(isset($_POST['logout'])){
    header("Location:logout.php");
}
echo "Hello ".$_SESSION['name'];
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
    <input type="submit" name = "logout" value="Log Out">
</form>
</body>
</html>