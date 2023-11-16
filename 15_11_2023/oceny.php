<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oceny</title>
</head>
<body>
<?php
    if (!empty($_POST)){
    @$nazwisko = $_POST["nazwisko"];
    @$imie = $_POST["imie"];
    @$ocena = $_POST["ocena"];

    $polaczenie = mysqli_connect("localhost", "root", "", "oceny_informatyka");

    $sql = "INSERT INTO oceny (id, nazwisko, imie, ocena) VALUES (NULL, '$nazwisko', '$imie', '$ocena')";

    if (mysqli_query($polaczenie, $sql)) {
        $zapytanie = "SELECT * FROM oceny";
        $result = mysqli_query($polaczenie, $zapytanie);
        while($row = mysqli_fetch_row($result)){
            echo "<p>$row[1]</p> </br>";
            echo "<p>$row[2]</p> </br>";
            echo "<p>$row[3]</p>";
        } 
    }else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }
    }
?>
</body>
</html>