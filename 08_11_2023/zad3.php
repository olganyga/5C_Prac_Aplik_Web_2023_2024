<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 3</title>
</head>
<body>
<form method="post">
    <p>podaj liczbę, z której chcesz obliczyć wartość bezwzględną</p>
    <input type="number" name="l">
    <input type="submit">
</form>
    <?php
    if (!empty($_POST)){
        @$y = $_POST["l"];
    if($y > 0){
        echo "|$y| = $y";
    }else{
        $uy = $y * -1;
        echo "|$y| = $uy";
    }
}
    ?>
</body>
</html>