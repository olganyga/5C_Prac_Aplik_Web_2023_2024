<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 3</title>
</head>
<body>
    <?php
    echo "pętla for: </br>";
    for($i = 1; $i<=10; $i++){
        echo "√$i = " . sqrt($i) . "</br>";
    }
    echo "</br>";
    echo "pętla while </br>";
    $s = 1;
    while($s<=10){
        echo "√$s = " . sqrt($s) . "</br>";
        $s++;
    }
    echo "</br>";
    echo "pętla do...while </br>";
    $w=1;
    do{
        echo "√$w = " . sqrt($w) . "</br>";
        $w++;
    }while($w<=10)
    ?>
</body>
</html>