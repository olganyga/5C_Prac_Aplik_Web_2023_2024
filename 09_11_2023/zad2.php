<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 2</title>
</head>
<body>
    <?php
    echo "pętla for: </br>";
    for($i = 100; $i>90; $i--){
        echo $i . " ";
    }
    echo "</br>";
    echo "pętla while </br>";
    $s = 100;
    while($s>90){
        echo $s . " ";
        $s--;
    }
    echo "</br>";
    echo "pętla do...while </br>";
    $w=100;
    do{
        echo $w . " ";
        $w--;
    }while($w>90)
    ?>
</body>
</html>