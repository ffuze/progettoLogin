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
        quanto vuoi pagare:
    <input type="number" name="prezzo" value="0"><br>
        descrizione:
    <input type="text" name="def" value="descrizione"><br>
    <input type="submit">
    </form>

<?php
session_start();
include("connessione.php");
$idOggetto = 0;
$idOggetto = $_POST["no"];
$_SESSION["gesu"]= $idOggetto;
echo $_SESSION["gesu"];

?>

</body>  
