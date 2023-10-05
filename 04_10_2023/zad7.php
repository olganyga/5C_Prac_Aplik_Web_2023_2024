<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad7</title>
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
    if($x > $y && $x > $z){
        echo "Liczba $x jest największa spośród liczb $x, $y, $z";
    }elseif($y > $x && $y > $z){
        echo "Liczba $y jest największa spośród liczb $x, $y, $z";
    }else{
        echo "Liczba $z jest największa spośród liczb $x, $y, $z";
    }
    }
    ?>
</body>
</html>