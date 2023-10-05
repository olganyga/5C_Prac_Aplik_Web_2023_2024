<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad8</title>
</head>
<body>
    <form method="post">
        <p>Podaj pierwszą liczbę:</p>
        <input type="number" name="liczba1">
        <p>Podaj drugą liczbę:</p>
        <input type="number" name="liczba2">
        <p>Podaj trzecią liczbę:</p>
        <input type="number" name="liczba3">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["liczba1"];
    @$y = $_POST["liczba2"];
    @$z = $_POST["liczba3"];
    if($x == $y || $x == $z || $y == $z){
        echo "Spośród liczb $x, $y, $z przynajmniej dwie pary są takie same";
    }else{
        echo "Spośród liczb $x, $y, $z nie ma ani jednej pary takich samych";
    }
    }
    ?>
</body>
</html>