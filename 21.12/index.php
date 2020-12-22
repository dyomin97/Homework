
<?php
//Loop from 5 to 13
for($i = 5; $i <=13; $i++){
    echo $i.'<br/>';
}

echo '<hr/>';

//The second task with while-loop
$num = 1000;
$iteration = 0;


while($num >= 50){
    $num/=2;
    $iteration++;
    if($num < 50) {
        echo 'Final number is: '.$num.'  Number of iterations: '.$iteration;
    }
}
//The second task with for-loop
$it = 0;
for($num = 1000; $num >= 50; ){
    $num/=2;
    $it++;

    if($num < 50) {
        echo '<br/> Final number is: '.$num.'  Number of iterations: '.$iteration;
        break;
    }
}
//The third task
echo '<hr/>';
$i = 1;
for($j=0; $j<= 10 - $i; $j++){
    echo $j.' ';
}

echo '<hr/>';
?>

<?php
//Homework from the 18th Dec
//Task 3
define('GRAV_ACC', 9.80665);
echo GRAV_ACC;
echo '<hr/>';

date_default_timezone_set("Asia/Yekaterinburg");

$hour = getdate()["hours"];;
if($hour>=8 && $hour<20){
    echo "<img src='images/day.jpg' width=450px height=350px";
} elseif ($hour>=20 || $hour<8){
    echo "<img src='images/night.jpeg' width=450px height=350px";
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
<body>

</body>
</html>
