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
//Task 2

$arr2 = array('Африка' => array('Алжир', 'Танзания','Тунис'),
         'Южная Америка' => array('Бразилия','Аргентина', 'Колумбия'));
foreach($arr2 as $key=>$value) {
    foreach ($value as $value2) {
if(strpos($value2, 'А') === 0){
echo $value2;
    }
}
}
?>



