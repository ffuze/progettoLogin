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

echo "<h1>Ciao . " . $_SESSION["username"] . ", sei nella PAGINA DI BENVENUTO!!!!!!!!!!!!!!</h1>";


?>
</body>