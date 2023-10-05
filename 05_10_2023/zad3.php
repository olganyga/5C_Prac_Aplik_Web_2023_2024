<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
    <form method="post">
        <p>Podaj pierwszą liczbę:</p>
        <input type="number" name="p">
        <p>Podaj drugą liczbę:</p>
        <input type="number" name="d">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["p"];
    @$y = $_POST["d"];
    if($x>$y){
        echo "pierwsza liczba nie może być większa od drugiej";
    }else{
        for($i = $x; $i<=$y; $i++){
            if($i %3 == 0 && $i %7 == 0){
                echo "$i ";
            }
        }
    }

    }
    ?>
</body>
</html>