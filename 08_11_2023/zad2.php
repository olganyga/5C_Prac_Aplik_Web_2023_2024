<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 2</title>
</head>
<body>
<form method="post">
    <p>podaj liczbę, z której chcesz obliczyć pierwiastek</p>
    <input type="number" name="p">
</form>
    <?php
    if (!empty($_POST)){
        @$x = $_POST["p"];
    if($x < 0){
        echo "Pierwiastek z liczby ujemnej nie istnieje!";
    }else{
        $pier = sqrt($x);
        echo "Pierwiastek z liczby " . $x . " to " . $pier;
    }
}
    ?>
</body>
</html>