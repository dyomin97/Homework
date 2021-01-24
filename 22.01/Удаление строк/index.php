<?php

$hostname = 'localhost';
$username = 'Evgenii';
$password = 'a1b32725368732a';
$db_name = 'Logins';

$db_connect = mysqli_connect($hostname, $username, $password);

$sql = mysqli_query($db_connect, "CREATE DATABASE $db_name");

mysqli_select_db($db_connect, $db_name);

$sql2 = mysqli_query($db_connect, "CREATE TABLE Name(
    ID_person INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(25) NOT NULL
)");
/*
mysqli_query($db_connect, "INSERT INTO Name VALUES(NULL, 'Sean')");
mysqli_query($db_connect, "INSERT INTO Name VALUES(NULL, 'John')");
mysqli_query($db_connect, "INSERT INTO Name VALUES(NULL, 'Rose')");
mysqli_query($db_connect, "INSERT INTO Name VALUES(NULL, 'Paul')");
mysqli_query($db_connect, "INSERT INTO Name VALUES(NULL, 'Kate')");


mysqli_query($db_connect,("DELETE Name FROM Name WHERE Name = 'Sean'"));
*/





?>
