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
    for($i = 100; $i>=80; $i--){
        if($i%5==0){
            echo $i . " ";
        }
    }
    echo "</br>";
    echo "pętla while </br>";
    $s = 100;
    while($s>=80){
        if($s%5==0){
        echo $s . " ";
        }
        $s--;
    }
    echo "</br>";
    echo "pętla do...while </br>";
    $w=100;
    do{
        if($w%5==0){
            echo $w . " ";
            }
            $w--;
    }while($w>=80)
    ?>
</body>
</html>