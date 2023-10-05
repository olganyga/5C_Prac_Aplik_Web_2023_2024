<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad5</title>
</head>
<body>
<?php
    $x = 1;
    while($x<=10){
    for($i=1; $i<=10; $i++){
        $z = $i*$x;
        echo $z . " ";
    }
    $x++;
    echo "</br>";
    }
    ?>
</body>
</html>