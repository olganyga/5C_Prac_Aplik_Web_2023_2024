<?php
if(!isset($_COOKIE['wejscia'])){
    $ile = 1;
}else{
    $ile = (int)$_COOKIE['wejscia'];
    if($ile < 1)
        $ile = 1;
    $ile++;
}
setcookie('wejscia', "$ile", time() + 3600);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div class="hl">
            <h2>Odloty z lotniska</h2>
        </div>
        <div class="hr">
            <img src="zad6.png" alt="logotyp">
        </div>
    </header>
    <main>
    <h4>tabela odlotów</h4>
    <table>
        <th>lp.</th>
        <th>numer rejsu</th>
        <th>czas</th>
        <th>kierunek</th>
        <th>status</th>
<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "egzamin";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    $zapytanie = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;";

    $result = mysqli_query($polaczenie, $zapytanie);
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "</tr>";
    }
    
?>
    </table>
    </main>
    <footer>
    <div class="p">
        <a href="kw1.jpg">Pobierz obraz</a>
    </div>
    <div class="d">
        <?php
        if($ile == 1){
            echo "<p>Dzień dobry! Sprawdź regulamin naszej strony</p>";
        }else{
            echo "<p>Miło nam że znowu nas odwiedziłeś</p>";
        }
        ?>
    </div>
    <div class="t">
        Autor: Olga Nyga
    </div>
    </footer>
</body>
</html>