<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad1</title>
    <style>
    table, th, td {
    border: 1px solid;
    }
    </style>
</head>
<body>
    <form method="post">
        <p>Podaj ilość kolumn:</p>
        <input type="number" name="kol">
        <p>Podaj ilość wierszy:</p>
        <input type="number" name="wier">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$k = $_POST["kol"];
    @$w = $_POST["wier"];
    echo "<table>";
    if($k < 1 || $w < 1){
        echo "ilość kolumn i wierszy nie może być mniejsza od 1";
    }else{
        for($i = 1; $i<=$k; $i++){
            echo "<tr>";
        for($i2 = 1; $i2<=$w; $i2++){
            echo "<th>text</th>";
        }
        echo "</tr>";
        }
        echo "</table>";
    }

    }
    ?>
</body>
</html>