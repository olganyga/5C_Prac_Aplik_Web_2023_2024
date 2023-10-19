<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logowanie</title>
</head>
<body>
<form method="post">
    <label>Login</label>
    <input type="text" name="login" required>
</br></br>
    <label>Hasło</label>
    <input type="text" name="passwd" required>
    </br>
    <input type="submit">
</form>
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "logowanie";

    $polaczenie = mysqli_connect($host, $user, $pass, $db);

    if (!empty($_POST)){
        @$login = $_POST["login"];
        @$passwd = $_POST["passwd"];

        $sql = "SELECT * FROM uzytkownik WHERE login='$login' AND haslo='$passwd'";

        $result = mysqli_query($polaczenie, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['login'] === $login && $row['haslo'] === $passwd) {
                echo "Zalogowano!";
            }else{
                echo "Błędny login lub hasło";
            }
        }else{
            echo "Błędny login lub hasło";
        }

    mysqli_close($polaczenie);
    }
?>
</body>
</html>