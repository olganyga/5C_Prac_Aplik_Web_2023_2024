<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 3</title>
</head>
<form method="post">
    <label>podaj postać kierunkową funkcji (a):</label>
    <input type="number" name="a">
    </br></br>
    <label>podaj wyraz wolny funkcji (b):</label>
    <input type="number" name="b">
    </br></br>
    <label>podaj początek przedziału funkcji:</label>
    <input type="number" name="pocz">
    </br></br>
    <label>podaj koniec przedziału funkcji:</label>
    <input type="number" name="kon">
    </br></br>
    <label>podaj dokładność wyniku:</label>
    <input type="number" name="dok">
    </br>
    <input type="submit">
</form>
<body>
    <?php
    if (!empty($_POST)){
        @$a = $_POST["a"];
        @$b = $_POST["b"];
        @$pocz = $_POST["pocz"];
        @$kon = $_POST["kon"];
        @$dok = $_POST["dok"];
        
        while (abs($a-$b) > $dok){
            $x1 = ($a + $b)/2;
            if(abs($x1 <= $dok)){
                break;
            }elseif($x1 * $a < 0){
                $b = $x1;
            }else{
                $a = $x1;
            }
        }
        echo ($a+$b) / 2;
    }
    ?>
</body>
</html>