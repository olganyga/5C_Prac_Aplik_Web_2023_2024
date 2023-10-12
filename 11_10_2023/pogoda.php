<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody Wrocław</title>
</head>
<body>
    <header>
        <div class="hleft">
            <img src="logo.png" alt="meteo">
        </div>
        <div class="hmiddle">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div class="hright">
            <p>maj, 2019r.</p>
        </div>
    </header>
    <main>
    <table>
        <th>DATA</th>
        <th>TEMPERATURA W NOCY</th>
        <th>TEMPERATURA W DZIEŃ</th>
        <th>OPADY [mm/h]</th>
        <th>CIŚNIENIE [hPa]</th>
<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prognoza";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    $zapytanie = "SELECT * FROM pogoda";

    $result = mysqli_query($polaczenie, $zapytanie);
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";
        echo "</tr>";
    }
    
?>
    </table>
    </main>
    <div class="map">
        <div class="mleft">
        <img src="obraz.jpg" alt="„Polska, Wrocław">
        </div>
        <div class="mright">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </div>
    <footer>
    <p>Stronę wykonała: Olga Nyga</p>
    </footer>
</body>
</html>