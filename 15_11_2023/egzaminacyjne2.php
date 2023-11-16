<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>egzaminacyjne2</title>
</head>
<body>
    <h1>Informatyka klasa 5c</h1>
    <form method="post" action="oceny.php">
        <label>nazwisko</label>
        <input type="text" name="nazwisko" required>
    </br></br>
        <label>imię</label>
        <input type="text" name="imie" required>
    </br></br>
    <label>ocena</label>
    <input type="number" name="ocena" min="1" max="6" required>
</br></br>
    <input type="submit">
</form>
    
</body>
</html>