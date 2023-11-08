<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>przeliczanie walut</title>
</head>
<body>
<form method="post">
    <label>Wybierz język</label>
    <select name="lang">
        <option value="p">polski</option>
        <option value="a">angielski</option>
        <option value="n">niemiecki</option>
        <option value="h">hiszpański</option>
    </select>
</br>
    <input type="submit">
    <?php
    if (!empty($_POST)){
        @$lang = $_POST["lang"];
        switch($lang){
            case "a":
                echo "angielski";
                break;
            case "n":
                echo "niemiecki";
                break;
            case "h":
                echo "hiszpanski";
                break;
            default: echo "polski";
        }
    }
    ?>
</form>
</body>
</html>