<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie 4</title>
    <style>
    table{
    width: 100%;
    border-width: 1px;
    border-style: solid;
    border-color: black;
    border-collapse: collapse;
    }

    td{
        border-width: 1px;
        border-style: solid;
        border-color: black;
        border-collapse: collapse; 
    }

    th{
        border-width: 1px;
        border-style: solid;
        border-color: black;
        border-collapse: collapse; 
    }
    </style>
</head>
<body>
<table>
        <th>Nazwisko</th>
        <th>Imię</th>
        <th>Data urodzenia</th>
    <?php
    $polaczenie = mysqli_connect("localhost", "root", "", "5c");

    $zapytanie = "SELECT * FROM klasa";

    $result = mysqli_query($polaczenie, $zapytanie);
    while($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[3]</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>