<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kolory</title>
    <style>
        p{
            height: 50%;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 50px;
            border: 2px dotted red;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if (!empty($_POST)){
        @$bg = $_POST["backg"];
        @$text = $_POST["textc"];

        echo "<p style=\"background-color: #$bg\"; \"color:#$text\"> Olga Nyga</p>";
    }
    ?>
</body>
</html>