<?php

session_start();

if(!isset($_SESSION["account"])){
    die("ACCESS DENIED");
} else{
    echo $_SESSION["success"];
    unset($_SESSION["success"]);
}
$result = 0;

foreach($_POST as $value => $key){
    $result+=(int)$key;
}

if(isset($_POST["logout"])){
    header("Location:logout.php");

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
<form method="POST">
    <?php
    echo "Welcome ".$_SESSION["name"];
    echo "<br/>";

    echo $_SESSION["success"];

    ?>
    <p>
    1. Считаете ли Вы, что у многих ваших знакомых хороший характер?
        <input type = "radio" name="1" value="0" checked>Да
        <input type = "radio" name="1" value="1">Нет
    </p>
    <p>
    2. Раздражают ли Вас мелкие повседневные обязанности?
        <input type = "radio" name="2" value="0" checked>Да
        <input type = "radio" name="2" value="1">Нет
    </p>
    <p>
    3. Верите ли Вы, что ваши друзья преданы Вам?
        <input type = "radio" name="3" value="1" checked>Да
        <input type = "radio" name="3" value="0">Нет
    </p>
    <p>
    4. Неприятно ли Вам, когда незнакомый человек делает Вам замечание?
        <input type = "radio" name="4" value="0" checked>Да
        <input type = "radio" name="4" value="1">Нет
    </p>
    <p>
    5. Способны ли Вы ударить собаку или кошку?
        <input type = "radio" name="5" value="0" checked>Да
        <input type = "radio" name="5" value="1">Нет
    </p>
    <p>
    6. Часто ли Вы принимаете лекарства?
        <input type = "radio" name="6" value="0" checked>Да
        <input type = "radio" name="6" value="1">Нет
    </p>
    <p>
    7. Часто ли Вы меняете магазин, в который ходите за продуктами?
        <input type = "radio" name="7" value="0" checked>Да
        <input type = "radio" name="7" value="1">Нет
    </p>
    <p>
    8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?
        <input type = "radio" name="8" value="0" checked>Да
        <input type = "radio" name="8" value="1">Нет
    </p>
    <p>
    9. Тяготят ли Вас общественные обязанности?
        <input type = "radio" name="9" value="1" checked>Да
        <input type = "radio" name="9" value="0">Нет
    </p>
    <p>
    10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
        <input type = "radio" name="10" value="1" checked>Да
        <input type = "radio" name="10" value="0">Нет
    </p>
    <p>
    11. Часто ли Вам приходят в голову мысли о Вашей невезучести?
        <input type = "radio" name="11" value="0" checked>Да
        <input type = "radio" name="11" value="1">Нет
    </p>
    <p>
    12. Сохранилась ли у Вас фигура по сравнению с прошлым?
        <input type = "radio" name="12" value="0" checked>Да
        <input type = "radio" name="12" value="1">Нет
    </p>
    <p>
    13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
        <input type = "radio" name="13" value="1" checked>Да
        <input type = "radio" name="13" value="0">Нет
    </p>
    <p>
    14. Нравится ли Вам семейная жизнь?
        <input type = "radio" name="14" value="1" checked>Да
        <input type = "radio" name="14" value="0">Нет
    </p>
    <p>
    15. Злопамятны ли Вы?
        <input type = "radio" name="15" value="0" checked>Да
        <input type = "radio" name="15" value="1">Нет
    </p>
    <p>
    16. Находите ли Вы, что стоит погода, типичная для данного времени года?
        <input type = "radio" name="16" value="0" checked>Да
        <input type = "radio" name="16" value="1">Нет
    </p>
    <p>
    17. Случается ли Вам с утра быть в плохом настроении?
        <input type = "radio" name="17" value="0" checked>Да
        <input type = "radio" name="17" value="1">Нет
    </p>
    <p>
    18. Раздражает ли Вас современная живопись?
        <input type = "radio" name="18" value="0" checked>Да
        <input type = "radio" name="18" value="1">Нет
    </p>
    <p>
    19. Надоедает ли Вам присутствие чужих детей в доме более одного часа?
        <input type = "radio" name="19" value="1" checked>Да
        <input type = "radio" name="19" value="0">Нет
    </p>

    <p>
        <input type = "submit" name = "send" value = "Send">
        <input type = "submit" name = "logout" value = "Log Out">
    </p>


    <?php
echo $_SESSION["name"];
echo "<br/>";
    if($result > 15) {
        echo "У Вас покладистый характер";
    } else if($result >=8 || $result <=15){
        echo "Вы не лишены недостатков, но с Вами можно ладить";
    } else if($result <8){
        echo "Вашим друзьям можно посочувствовать";
    }

    ?>
</form>
</body>
</html>
