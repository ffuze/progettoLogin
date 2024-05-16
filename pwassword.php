
<!--<?php

$pwassword=$_["mail"];

$recuperoPassword = "SELECT * FROM utente WHERE email = '$mail'";
$result = mysqli_query($conn, $recuperoPassword);

if($result){
    header("Location: pages/errorePassword.php");
}

?>

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
    
    <div class="wrapper">
        Inserisci la nuova password:
        <input type="text"><br><br>
        Reiserisci la password:
        <input type="text" name="passsword"><br><br>

    </div>  
<?php


$recuperoPassword = "UPDATE utente SET password =  WHERE `studenti`.`Matricola` = 13;";
$result = mysqli_query($conn, $recuperoPassword);




?>
</body>