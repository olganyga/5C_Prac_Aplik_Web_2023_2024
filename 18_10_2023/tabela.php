<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl2.css">
    <title>Prognoza pogody</title>
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
        background-color: darkcyan;
        color: white;
        border-width: 1px;
        border-style: solid;
        border-color: black;
        border-collapse: collapse; 
    }
    </style>
</head>

<body>
    <table>
        <th>ID</th>
        <th>ID MIASTA</th>
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
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "<td>$row[6]</td>";
        echo "</tr>";
    }
    
?>
    </table>
</body>
</html>