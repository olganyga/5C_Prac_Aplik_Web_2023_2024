<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przeliczanie walut</title>
</head>
<body>
<form method="post">
    <label>Podaj kwotę PLN</label>
    <input type="number" name="pln">
    </br>
    <select name="waluta">
        <option value="euro">euro</option>
        <option value="dolar">dolar</option>
        <option value="frank">frank</option>
    </select>
</br>
    <input type="submit">
    <?php
    if (!empty($_POST)){
        @$pln = $_POST["pln"];
        @$waluta = $_POST["waluta"];
        switch($waluta){
            case "euro":
                echo "$pln PLN to " . $pln * 4.32 . " €";
                break;
            case "dolar":
                echo "$pln PLN to " . $pln * 3.21 . " $";
                break;
            case "frank":
                echo "$pln PLN to " . $pln * 3.98 . " CHF";
                break;
        }
    }
    ?>
</form>
</body>
</html>