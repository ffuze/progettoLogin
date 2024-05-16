<?php
session_start();
if(isset($_SESSION['errore_reg'])){
    echo "<p style='color:red;'>" . $_SESSION['errore_registrazione'] . "</p>";
    unset($_SESSION['errore_reg']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/stylesReg.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <form action="pages/scriptReg.php" method="post">
            <h2>Registrazione</h2>
            <div class="input-box">
                <input type="text" id="nome" name="nome" placeholder="Nome"><br>
            </div>
            <div class="input-box">
                <input type="text" id="cognome" name="cognome" placeholder="Cognome"><br>
            </div>
            <div class="input-box">
                <input type="text" id="classe" name="classe" placeholder="Classe"><br>
            </div>
            <div class="input-box">
                <input type="number" id="eta" name="eta" placeholder="Età"><br>
            </div>
            <div class="input-box">
                <input type="text" id="biografia" name="biografia" placeholder="Biografia"><br><br>
            </div>
            <div class="input-box">
                <input type="text" id="email" name="email" placeholder="E-mail"><br>
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="Password"><br>
            </div>
            <input type="submit" class="btn" value="Registrati">
            <div class="sbagliato">
                <p>Hai sbagliato? <a href="./index.php">Torna al login</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>