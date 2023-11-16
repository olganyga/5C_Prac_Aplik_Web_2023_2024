<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egzaminacyjne1</title>
</head>
<body>
    <h1>Formularz</h1>
    <form method="post" action="ankieta.php">
    <label>rok urodzenia</label>
    <input type="number" name="rok" maxlength="4" required>
</br></br>
    <label>płeć</label>
    <input type="text" name="plec" required>
</br></br>
    <label>uwagi o stronie (max 100 znaków)</label>
    <input type="text" name="uwagi" maxlength="100" required>
</br></br>
    <label>wyrażam zgodę na udział w badaniu</label>
    <input type="checkbox" name="zgoda" required>
</br></br>
    <input type="submit">
</form>
    
</body>
</html>