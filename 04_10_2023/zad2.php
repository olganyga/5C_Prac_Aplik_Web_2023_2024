<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <form method="post">
        <p>Podaj pierwszą liczbę:</p>
        <input type="number" name="liczba1">
        <p>Podaj drugą liczbę:</p>
        <input type="number" name="liczba2">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["liczba1"];
    @$y = $_POST["liczba2"];
    if($x % $y == 0){
        echo "Liczba $x jest podzielna przez liczbę $y";
    }else{
        echo "Liczba $x NIE jest podzielna przez liczbę $y";
    }
    }
    ?>
</body>
</html>