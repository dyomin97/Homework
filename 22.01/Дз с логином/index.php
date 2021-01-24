<?php
session_start();
$hostname = 'localhost';
$username = 'Evgenii';
$password = 'a1b32725368732a';
$db_name = 'users';

$db_connect = mysqli_connect($hostname, $username, $password);
/*
$sql = mysqli_query($db_connect, "CREATE DATABASE $db_name");
*/
mysqli_select_db($db_connect, $db_name);
/*
$sql2 = mysqli_query($db_connect, "CREATE TABLE Users(
    ID_person INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(25) NOT NULL,
    Surname VARCHAR(25) NOT NULL,
    Age INT UNSIGNED,
    Login VARCHAR(50) NOT NULL,
    Password INT NOT NULL
)");


mysqli_query($db_connect, "INSERT INTO Users VALUES(NULL, 'Sean','Stanly',22,'sean@gmail.com',12345)");
mysqli_query($db_connect, "INSERT INTO Users VALUES(NULL, 'Rose','McKenzy',30,'rose@gmail.com',12345)");
mysqli_query($db_connect, "INSERT INTO Users VALUES(NULL, 'Paul','Henry',29,'paul@gmail.com',12345)");
mysqli_query($db_connect, "INSERT INTO Users VALUES(NULL, 'Kate','Mitchell',25,'kate@gmail.com',12345)");

*/

if ( isset($_POST['login']) && isset($_POST['password']) ) {
    unset($_SESSION["account"]);
    if ( strlen($_POST['login']) < 1 || strlen($_POST['password']) < 1 ) {
        $_SESSION['error'] = "User name and password are required";
        header("Location: index.php");
        return;

    } else if(strpos($_POST['login'],'@')===false){
        $_SESSION['error'] =  'Email must have an at-sign (@)';
        header("Location: index.php");
        return;

    }else {
        $user = $_POST['login'];
        $pass = $_POST['password'];
        $select = mysqli_query($db_connect, "SELECT * FROM users WHERE Login='" . $user . "'");

        if(mysqli_num_rows($select)>0) {
            $arr = mysqli_fetch_all($select, MYSQLI_ASSOC);

                if ($pass === $arr[0]['Password']) {

                    $_SESSION['account'] = $user;
                    $_SESSION['name'] = $arr[0]['Name'];
                    header("Location:page.php");
                    return;

            }
                else {
                    $_SESSION['error'] = 'Invalid login or password';
                    header("Location:index.php");
                    return;
                }
        } 



        }


}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <div class="wrapper">
        <?
        if(isset($_SESSION['error'])){
            echo "<span style='color:#ff0000; margin:0px'>" .$_SESSION['error']."</span>";
            unset($_SESSION['error']);
        }
        ?>
<div class="inn-wrapper">
    <div class="field">
    <label for="login">Login</label>
    <input type="text" name="login">
    </div>
    <div class="field">
    <label for="password">Password</label>
    <input type="text" name="password">
    </div>
    <div class="field">
        <label></label>
        <input type="submit" name="submit" value="LogIn">
    </div>
</div>
    </div>
</form>
</body>
</html>
