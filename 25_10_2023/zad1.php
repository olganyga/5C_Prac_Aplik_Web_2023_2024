<?php
setcookie("username", "Olga_Nyga");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad1</title>
</head>
<body>
<?php
    if(!isset($_COOKIE["username"])){
        echo "Cookie is not set!";
    }else{
        echo "Cookie is set!";
    }
    ?>
</body>
</html>