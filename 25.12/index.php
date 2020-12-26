<?php
//Task 1
$str1 = "Sentence with no sense";
if(strlen($str1) > 5) {
    echo str_replace(mb_substr($str1,0,5), '',$str1).'...';
} else {
    echo $str1;
}
echo "<hr />";
//Task 2
$str2 = "absolutely cool";
echo str_replace(array('a','b','c'),array(1,2,3),$str2);

echo "<hr />";

//Task 3
$str3 = "abc abc abc";

echo strrpos($str3,'b');

echo "<hr />";

//Task 4
$str4 = "html css php";

$arr = explode(' ',$str4);

print_r($arr);

echo "<hr />";

//Task 5
$date1 = "20-11-2018";
$date2 = "25-11-2018";

$date_origin = date_create($date1);
$date_target = date_create($date2);

$date_origin  -> format(d-m-Y);
$date_target -> format(d-m-Y);

$interval = date_diff($date_origin, $date_target);
echo $interval->format('%a дней');
?>

