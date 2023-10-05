<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad6</title>
</head>
<body>
    <form method="post">
        <p>Podaj rok:</p>
        <input type="number" name="rok">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$y = $_POST["rok"];
    if($y < 1582){
        echo "Lata przestępne są liczone od 1582 roku";
    }elseif($y % 4 == 0 && $y %400 == 0){
        echo "luty w $y roku trwa 29 dni";
    }else{
        echo "luty w $y roku trwa 28 dni";
    }
    }
    ?>
</body>
</html>