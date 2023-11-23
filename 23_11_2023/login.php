<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Logowanie</h1>
    <div class="center">
    <form method="post" action="sprawdzenie.php">
        <label>Login:</label>
        <input type="text" name="login" required>
</br></br>
        <label>Hasło:</label>
        <input type="password" name="password" required>
</br></br>
        <button type="submit">Logowanie</button>
    </form>
    </div>
</body>
</html>