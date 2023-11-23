<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zmiana hasła</title>
</head>
<body>
<?php
    session_start();
    if($_SESSION['login'] == null){
        header("Location: login.php");
    }
    echo "<h1>Zmiana hasła</h1>" . "</br>";
    ?>
    <form method="post">
        <label>Podaj nowe haslo</label>
        <input type="password" name="newpsswd" required>
        <button type="submit">Zmień hasło</button>
    </form>
    <?php
    $l = $_SESSION ['login'];
    @$np = $_POST['newpsswd'];
    $con = mysqli_connect("localhost", "root", "", "uzytkownicy");
    $zapytanie = "UPDATE users SET password='$np' WHERE login='$l'";
    ?>
</body>
</html>