<?php
session_start();

if (!isset($_SESSION["account"])) {
    die("ACCESS DENIED");
} else {
    echo $_SESSION["success"];
    unset($_SESSION["success"]);
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
<?
if(isset($_COOKIE["last"])){
    echo "Last visited page is: ".$_COOKIE["last"];
}
?>
<p>
<a href="bitrix.php">bitrix</a>
<a href="fact.php">fact</a>
</p>
<form method="POST">
    <p>Choose a color:</p>
    <p>
        <select name="colors">
        <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="green">Green</option>
        </select>
        <input type="submit" name="choose" value="Choose">
    </p>
<p>
    <input type = "submit" name = "logout" value = "Log Out">
</p>
</form>
</body>
</html>
