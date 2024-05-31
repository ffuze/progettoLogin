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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-">
        <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#"><img class="d-flex" src="../images/meuccilogo.png" width="30px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="benvenuto.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aggiungi_oggetto.php">Aggiungi oggetto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="oggetti.php">Visualizza Oggetti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profilo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" onclick="confermaLogout()">Logout</a></li>
                            <div id="spinner" style="display: none;">Logout in corso...</div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
