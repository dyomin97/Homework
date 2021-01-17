<?php
$str = file_get_contents("style.css");

preg_match_all("/#\w+/",$str,$arr);

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
<select name="colors" class="selector" style="width:150px">
    <option value="initital" checked>Choose a color</option>
    <?
    foreach($arr as $elem){
        foreach($elem as $color) {
            echo "<option style="."background:".$color. " value=" . $color. "></option>";
        }
    }
    ?>
</select>
</form>
<div class="divColors" style="width:300px; height:200px"></div>

<script>
    const someDiv = document.querySelector(".divColors");
    const colors = document.querySelector(".selector");

    colors.addEventListener('change', (event) => {
        someDiv.style.backgroundColor = event.target.value;
    });

</script>

</body>
</html>