<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pizza</title>
</head>
<body>
<?php
    if (!empty($_POST)){
        @$trasa = $_POST["odl"];
        @$czyciepła = $_POST["cc"];

        if(isset($_POST["cc"])){
            $k = $trasa * 0.5;
            $kosztc = $k + ($k*0.15);
            echo "Koszt dostawy wynosi: " . $kosztc;
        }else{
            $k = $trasa * 0.5;
            echo "Koszt dostawy wynosi: " . $k;
        }


        }
    ?>
</body>
</html>