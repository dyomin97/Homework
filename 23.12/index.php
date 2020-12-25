<?php
//Task 1
$rand_array = array();

for($i = 0; $i < 15; $i++){
  $rand_array[] = mt_rand(1, 100);
}

foreach($rand_array as $value){
    if($value % 2 ==0) {
        echo "<b> $value </b> <br/>";
    } else {
        echo "$value <br/>";
    }
}

echo '<hr />';
//Task 2

$arr2 = array('Африка' => array('Алжир', 'Танзания','Тунис'),
    'Южная Америка' => array('Бразилия','Аргентина', 'Колумбия'));
foreach($arr2 as $key=>$value) {
    foreach ($value as $value2) {
        if(strpos($value2, 'А') === 0){
            echo $value2.' ';
        }
    }
}
echo "<hr/>";
//Task 3
$arr3 =array(array(1,5,10,35,40), array(53,27,99,105,33,74,31,13));
$sum = 0;
foreach($arr3 as $key=>$value){
    if($key===0) {
        echo "First array: ";
    } else if($key === 1){
        echo "Second array: ";
    }
    echo count($value)."<br/>";
    $sum+=count($value);
}

echo "All elements: ";
echo $sum."<br/>";
?>



