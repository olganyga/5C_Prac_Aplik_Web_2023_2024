<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad4</title>
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
    if($x == 0){
        echo "Podana liczba jest równa 0";
    }elseif($x > 0){
        echo "Podana liczba jest większa od 0";
    }else{
        echo "Podana liczba jest mniejsza od 0";
    }
    }
    ?>
</body>
</html>