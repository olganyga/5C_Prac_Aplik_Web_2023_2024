<?php
session_start();
if($_SESSION['login'] == null){
    header("Location: login.php");
}
session_destroy();
echo "Wylogowano";
?>