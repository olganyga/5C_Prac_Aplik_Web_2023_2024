<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zad2</title>
</head>
<body>
    <form method="post">
        <p>Podaj pierwszą liczbę:</p>
        <input type="number" name="pierwsza">
        <p>Podaj drugą liczbę:</p>
        <input type="number" name="druga">
        <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$x = $_POST["pierwsza"];
    @$y = $_POST["druga"];
        if($x < 0 || $y < 0 || $x>$y){
            echo "pierwsza i druga liczba nie mogą być mniejsze od 0 oraz x>y";
        }else{
            //for
            echo "for </br>";
            for($i = $x; $i<=$y; $i +=2){
                echo "$i ";
            }
            echo "</br>";
            for($i1 = $y; $i1>=1; $i1 -=4){
                echo "$i1 ";
            }
            echo "</br>";
            //while
            echo "while </br>";
            $n = $x;
            while($n<=$y){
                echo "$n ";
                $n+=2;
            }
            echo "</br>";
            $m = $y;
            while($m>=1){
                echo "$m ";
                $m-=4;
            }
            echo "</br>";
            // do while
            echo "do while </br>";
            $c = $x;
            do{
                echo "$c ";
                $c+=2;
            }while($c<=$y);
            echo "</br>";
            $v = $y;
            do{
                echo "$v ";
                $v-=4;
            }while($v>=1);

        }
    }
    ?>
</body>
</html>