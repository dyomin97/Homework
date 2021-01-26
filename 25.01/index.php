<?php
session_start();
include_once 'auth.php';

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
        $user = new auth($_POST['login'],$_POST['password']);
        $connection = $user -> connect();
        $select = $user->selectUser();

        if(mysqli_num_rows($select)>0) {
            $arr = mysqli_fetch_all($select, MYSQLI_ASSOC);

                if ($user->getPass() === $arr[0]['Password']) {
                    $_SESSION['account'] = $user->getUser();
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
