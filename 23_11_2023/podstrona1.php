<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacje o koncie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    session_start();
    if($_SESSION['login'] == null){
        header("Location: login.php");
    }
    echo "<h1>Witaj " . $_SESSION['login'] . "!</h1> </br>";
    ?>
    <div class="center">
    <a href="zmiana_hasla.php">Zmień hasło</a>
    </div>
</br></br>
<div class="center">
    <button><a href="wyloguj.php" style="text-decoration: none; color: black;">Wyloguj</a></button>
</div>
    <?php
    
    ?>
</body>
</html>