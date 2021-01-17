<?php
//Задание с анкетой появится после того, как Вы выберете пользователя dyomin
// и введете пароль php123
session_start();

$_SERVER["REQUEST_METHOD"] = "POST";

//Корректый пользователь - dyomin
// Пароль - php123
$salt = 'XyZzy12*_';
$stored_hash =hash('md5', 'php123'.$salt);

$failure = false;
$success = false;
// Check to see if we have some POST data, if we do process it
if ( isset($_POST['user']) && isset($_POST['password']) ) {
    unset($_SESSION["account"]);
    if ( strlen($_POST['password']) < 1 ) {
        $_SESSION["failure"] = "Password is required";
    } else {
        $check = hash('md5', $_POST['password'].$salt);
        if ( $check == $stored_hash && $_POST["user"] == "dyomin") {

$_SESSION["success"] = "You have an access to all secret sections";
$_SESSION["name"] = "Евгений Дёмин";
$_SESSION["account"] = $_POST["user"];
header("Location:questionary.php");
return;
        } else {
           $_SESSION["failure"] = "Incorrect password or user name";
        }
    }
}

?>
<!DOCTYPE html>

<html>
<head>
    <title>Евгений Дёмин</title>
</head>

<body>
<?php
if(isset($_SESSION["failure"])){
    echo $_SESSION["failure"];
    unset($_SESSION["failure"]);
}
?>


<form method='POST'>
    <p>
        <label for='user_name'> User Name</label>
        <select id="user_name" name="user">
            <option value="dyomin">dyomin</option>
            <option value="borisov">borisov</option>
            <option value="ivanov">ivanov</option>
        </select>
    </p>
    <p>
        <label for='password'>Password</label>
        <input type='text' id='password' name='password'>
    </p>

    <p>

        <input type='submit' value='Log In'/>
        <button>Cancel</button>
    </p>

</form>

</body>
</html>

