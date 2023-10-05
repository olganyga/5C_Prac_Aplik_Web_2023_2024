<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad6</title>
</head>
<body>
    <form method="post">
        <p>Podaj wysokość prostokąta:</p>
        <input type="number" name="wys">
        <p>Podaj szerokość prostokąta:</p>
        <input type="number" name="szer">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["wys"];
    @$y = $_POST["szer"];
    
    if($x <= 0 || $y <= 0){
        echo "długość i szerokość prostokąta nie mogą być niedodatnie";
    }else{
        for($i = 1; $i<=$x; $i++){
            echo "*";
        }
        for($i = 1; $i<=$y; $i++){
            echo "</br> *";
        }
        echo"</br>";
        for($i = 1; $i<=$x; $i++){
            echo "*";
        }
    }

    }
    ?>
</body>
</html>