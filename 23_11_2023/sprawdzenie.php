<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    @$login = $_POST["login"];
    @$psswd = $_POST["password"];
    
    $con = mysqli_connect("localhost", "root", "", "uzytkownicy");
    $zapytanie = "SELECT * from users WHERE login='$login' AND password='$psswd'";
    $result = mysqli_query($con, $zapytanie);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['login'] === $login && $row['password'] === $psswd) {
            echo "Zalogowano!";
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['password'] = $psswd;
            header("Location: podstrona1.php");
        }else{
            echo "Błędny login lub hasło";
        }
    }else{
        echo "Błędny login lub hasło";
    }
?>
</body>
</html>