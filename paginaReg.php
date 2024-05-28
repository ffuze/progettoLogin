<?php
session_start();
if(isset($_SESSION['errore_reg'])){
    echo "<div class='error-wrapper'>";
    echo "<p>" . $_SESSION['errore_reg'] . "</p>";
    echo "</div>";
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
                <select id="classe" name="classe">
                    <option value="" disabled selected>Seleziona una classe</option>
                    <option style="color: black" value="1^ATL">1^ATL</option>
                    <option style="color: black" value="1^BMME">1^BMME</option>
                    <option style="color: black" value="1^CMME">1^CMME</option>
                    <option style="color: black" value="1^DIT">1^DIT</option>
                    <option style="color: black" value="1^EIT">1^EIT</option>
                    <option style="color: black" value="1^FIT">1^FIT</option>
                    <option style="color: black" value="1^GIT">1^GIT</option>
                    <option style="color: black" value="1^HEE">1^HEE</option>
                    <option style="color: black" value="1^IEE">1^IEE</option>
                    <option style="color: black" value="2^ATL">2^ATL</option>
                    <option style="color: black" value="2^BMME">2^BMME</option>
                    <option style="color: black" value="2^CMME">2^CMME</option>
                    <option style="color: black" value="2^DMEE">2^DMEE</option>
                    <option style="color: black" value="2^EIT">2^EIT</option>
                    <option style="color: black" value="2^FIT">2^FIT</option>
                    <option style="color: black" value="2^GIT">2^GIT</option>
                    <option style="color: black" value="2^HIT">2^HIT</option>
                    <option style="color: black" value="2^IIT">2^IIT</option>
                    <option style="color: black" value="2^LEE">2^LEE</option>
                    <option style="color: black" value="2^MEE">2^MEE</option>
                    <option style="color: black" value="3^A-EC">3^A-EC</option>
                    <option style="color: black" value="3^A-EN">3^A-EN</option>
                    <option style="color: black" value="3^A-IA">3^A-IA</option>
                    <option style="color: black" value="3^A-LG">3^A-LG</option>
                    <option style="color: black" value="3^A-MM">3^A-MM</option>
                    <option style="color: black" value="3^A-AT">3^A-AT</option>
                    <option style="color: black" value="3^A-ET">3^A-ET</option>
                    <option style="color: black" value="3^AAT-AET">3^AAT-AET</option>
                    <option style="color: black" value="3^B-IA">3^B-IA</option>
                    <option style="color: black" value="3^B-LG">3^B-LG</option>
                    <option style="color: black" value="3^B-MM">3^B-MM</option>
                    <option style="color: black" value="3^C-IA">3^C-IA</option>
                    <option style="color: black" value="4^A-AT">4^A-AT</option>
                    <option style="color: black" value="4^A-IA">4^A-IA</option>
                    <option style="color: black" value="4^A-LG">4^A-LG</option>
                    <option style="color: black" value="4^A-MM">4^A-MM</option>
                    <option style="color: black" value="4^AEN">4^AEN</option>
                    <option style="color: black" value="4^BMM">4^BMM</option>
                    <option style="color: black" value="4^AEN_BMM">4^AEN_BMM</option>
                    <option style="color: black" value="4^A-EC">4^A-EC</option>
                    <option style="color: black" value="4^A-ET">4^A-ET</option>
                    <option style="color: black" value="4^AET_AEC">4^AET_AEC</option>
                    <option style="color: black" value="4^B-IA">4^B-IA</option>
                    <option style="color: black" value="4^B-LG">4^B-LG</option>
                    <option style="color: black" value="4^C-IA">4^C-IA</option>
                    <option style="color: black" value="5^A-AT">5^A-AT</option>
                    <option style="color: black" value="5^A-IA">5^A-IA</option>
                    <option style="color: black" value="5^A-LG">5^A-LG</option>
                    <option style="color: black" value="5^A-MM">5^A-MM</option>
                    <option style="color: black" value="5^AEN">5^AEN</option>
                    <option style="color: black" value="5^BMM">5^BMM</option>
                    <option style="color: black" value="5^AEN-BMM">5^AEN-BMM</option>
                    <option style="color: black" value="5^AET">5^AET</option>
                    <option style="color: black" value="5^BAT">5^BAT</option>
                    <option style="color: black" value="5^AET-BAT">5^AET-BAT</option>
                    <option style="color: black" value="5^B-IA">5^B-IA</option>
                    <option style="color: black" value="5^B-LG">5^B-LG</option>
                    <option style="color: black" value="5^C-IA">5^C-IA</option>
                    <option style="color: black" value="5^D-IA">5^D-IA</option>
                </select><br>
            </div>
            <div class="input-box">
                <input type="number" id="eta" name="eta" placeholder="Età"><br>
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