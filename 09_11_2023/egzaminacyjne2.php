<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egzaminacyjne 2</title>
</head>
<body>
    <?php
    $s = 10;
    $i = 10;
    while($s<1000){
            $s += $i;
            $i++;

    }
    echo "Wynik: $s</br>Liczba zsumowanych cyfr: $i";
    ?>
</body>
</html>