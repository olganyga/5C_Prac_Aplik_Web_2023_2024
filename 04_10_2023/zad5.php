<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad5</title>
</head>
<body>
    <form method="post">
        <p>Podaj swój wiek:</p>
        <input type="number" name="wiek">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["wiek"];
    if($x < 0){
        echo "Wiek nie może być liczbą ujemną!";
    }elseif($x < 11){
        echo "Jesteś dzieckiem";
    }elseif($x >= 11 && $x < 18){
        echo "Jesteś nastolatkiem";
    }else{
        echo "Jesteś dorosły";
    }
    }
    ?>
</body>
</html>