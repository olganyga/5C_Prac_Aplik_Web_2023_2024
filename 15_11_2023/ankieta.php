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

    $sql = "INSERT INTO dane (id, rok_urodzenia, plec, uwagi) VALUES (NULL, '$rok', '$plec', '$uwagi')";

    if (mysqli_query($polaczenie, $sql)) {
      echo "Dziękujemy za udział w ankiecie";
    } else {
      echo "Błąd: " . mysqli_error($polaczenie);
    }
}
    ?>
</body>
</html>