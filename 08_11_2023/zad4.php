<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
<?php
    $a = 34324324;
    $b = 23132123;

    if($a > $b){
        echo "liczba $a jest większa od $b";
    }elseif($a == $b){
        echo "liczba $a jest równa liczbie $b";
    }else{
        echo "liczba $a jest mniejsza od $b";
    }
    ?>
</body>
</html>