<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad3</title>
</head>
<body>
    <form method="post">
        <p>Podaj liczbę:</p>
        <input type="number" name="liczba">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["liczba"];

    if($x>=100 && $x < 150){
        echo "$x mieści się w przedziale <100, 150)";
    }else{
        echo "$x NIE mieści się w przedziale <100, 150)";
    }
    }
    ?>
</body>
</html>