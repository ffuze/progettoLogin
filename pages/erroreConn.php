<?php
session_start();

if(isset($_SESSION['errore'])){
    echo "<div class='error-wrapper'>";
    echo "<i class='bx bx-error'><br><br></i>";
    echo "<p>" . $_SESSION['errore'] . "</p>";
    echo "</div>";
    unset($_SESSION['errore']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: url("../images/mercato.gif");
        }
    </style>
</head>
<body>
    
</body>
</html>
