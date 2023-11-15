<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 5</title>
</head>
<body>
    <form method="POST">
    <label>Imie</label>
    <input type="text" name="imie">
    <label>Nazwisko</label>
    <input type="text" name="nazwisko">
    <label>Data urodzenia</label>
    <input type="date" name="data">
    <input type="submit">
    </form>
    <?php
    if (!empty($_POST)){
    @$imie = $_POST["imie"];
    @$nazwisko = $_POST["nazwisko"];
    @$data = $_POST["data"];

    $polaczenie = mysqli_connect("localhost", "root", "", "5c");

    $sql = "INSERT INTO klasa (id, imie, nazwisko, data_urodzenia) VALUES (NULL, '$imie', '$nazwisko', '$data')";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Tabela zaktualizowana pomyślnie";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }
}
    ?>
</body>
</html>