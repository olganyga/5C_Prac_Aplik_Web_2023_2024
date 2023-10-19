<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>koszt</title>
</head>
<body>
    <?php
    if (!empty($_POST)){
        @$cena = $_POST["benz"];
        @$trasa = $_POST["km"];
        @$spalanie = $_POST["srsp"];

        if(is_float($cena + 0)&&is_float($spalanie + 0)){
            $s = $spalanie/100;
            $x = $s * $trasa;
            $koszt = $x * $cena;
            
            echo "Koszt benzyny: " . $cena;
            echo "</br>";
            echo "Długość trasy: " . $trasa;
            echo "</br>";
            echo "Spalanie samochodu: " . $spalanie;
            echo "</br>";
            echo "Koszt przejazdu wynosi: " . round($koszt, 2) . "zł";
        }else{
            echo "błędne dane";
        }
    }
    ?>
</body>
</html>