<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dodaj tabele</title>
</head>
<body>
    <h1>Dodawanie wiersza do bazy:</h1>
    <form method="post">
        <p>id miasta <a href="id_miasta.html">(więcej informacji)</a></p>
        <input type="number" name="miasto">
        <p>data prognozy</p>
        <input type="date" name="data">
        <p>temperatura w nocy</p>
        <input type="number" name="temp_noc">
        <p>temperatura w dzień</p>
        <input type="number" name="temp_dzien">
        <p>opady</p>
        <input type="number" name="opad">
        <p>ciśnienie</p>
        <input type="number" name="cis">
        <button type="submit">Wyślij</button>
    </form>

    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "prognoza";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    if (!empty($_POST)){
        @$miasto = $_POST["miasto"];
        @$data = $_POST["data"];
        @$temp_noc = $_POST["temp_noc"];
        @$temp_dzien = $_POST["temp_dzien"];
        @$opad = $_POST["opad"];
        @$cis = $_POST["cis"];


    $sql = "INSERT INTO pogoda (miasta_id, data_prognozy, temperatura_noc, temperatura_dzien, opady, cisnienie) 
    VALUES ($miasto, '$data', $temp_noc, $temp_dzien, $opad, $cis)";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Tabela dodana pomyślnie";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }

    mysqli_close($polaczenie);
    }
    ?>
    </br></br>
    
    <a href="zad2.php">Wyszukaj tabelę po ID</a>
  </br>
    <a href="zad3.php">Usuń tabelę</a>
  </br>
      <a href="tabela.php">Pokaż tabele</a>
</body>
</html>