<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/stylesLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <form action="scriptAnnuncio.php" method="post">
        quanto vuoi pagare sta merda:
    <input type="number" name="prezzo" value="0">
    <input type="submit">
    </form>

    <input type="submit" value="back" name="back" onclick="header(location: ./oggetti.php)">

<?php
session_start();
include("connessione.php");

echo $_SESSION["g"];

?>
</body>  