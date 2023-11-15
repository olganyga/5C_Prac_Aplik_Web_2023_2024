<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ankieta</title>
</head>
<body>
<?php
    if (!empty($_POST)){
    @$rok = $_POST["rok"];
    @$plec = $_POST["plec"];
    @$uwagi = $_POST["uwagi"];

    $polaczenie = mysqli_connect("localhost", "root", "", "egz1_badanie");

    $sql = "INSERT INTO klasa (id, rok_urodzenia, plec, uwagi) VALUES (NULL, '$rok', '$plec', '$uwagi')";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Tabela zaktualizowana pomyślnie";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }
}
    ?>
</body>
</html>