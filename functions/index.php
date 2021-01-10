<?php
//Задача первая
$arr = [];

function arrRandom($a){
    for($i=0;$i<10;$i++){
        $a[$i] = mt_rand(0,100);

    }
    return $a;
}


print_r(arrRandom($arr));

echo "<hr />";
//Задача вторая

$str = "HTML, CSS, PHP, BITRIX";

function countWords($s){
   return sizeof(explode(", ",$s));
}

echo countWords($str);

echo "<hr />";

//Третья задача

$str = "HTML, CSS, PHP, BITRIX";
$newStr = "";
function reverseLetters($s){
    for($i=strlen($s) - 1; $i>=0; $i--){
        $newStr.=$s[$i];
    }
    return $newStr;
}

echo reverseLetters($str);

echo "<hr />";

//Четвертая задача

$str = "HTML, CSS, PHP, BITRIX";

function strLength($s)
{
    $s.="\n";
    $i = 0;
    while($s[$i]!="\n"){
        $i++;
    }
    return $i;
}

echo strLength($str);

echo "<hr />";

//Пятая задача
$str = "HTML, CSS, PHP, BITRIX";

function newLine($s){
    $i=0;
    while($i<strlen($s)){
        echo($s[$i]."<br />");
        $i++;
    }
}

echo newLine($str);
?>
