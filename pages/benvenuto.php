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
<?php

session_start();

echo "<h1>Ciao " . $_SESSION["utente"] . ", sei nella pagina del mercatino! WIP</h1>";




?>

<form action="pages/mercatino.php" method="post">
    <p> visualizza le offerte </p>
    <input type="submit" value="mercatino">
</form>

</body>