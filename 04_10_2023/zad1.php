<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
</head>
<body>
    <form method="post">
        <p>Wpisz liczbę:</p>
        <input type="number" name="liczba">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["liczba"];
    if($x %2 == 0){
        echo "Podana liczba jest parzysta";
    }else{
        echo "Podana liczba jest nieparzysta";
    }
    }
    ?>
</body>
</html>