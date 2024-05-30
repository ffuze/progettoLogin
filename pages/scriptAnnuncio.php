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
include("connessione.php");

$cash = $_POST["prezzo"];
$definizione =$_POST["def"];
$status = "pending";
$m = $_SESSION["email"];
$g = $_SESSION["gesu"];

$sqli ="SELECT * FROM utente JOIN oggetto ON oggetto.USER_EMAIL=utente.EMAIL 
WHERE  oggetto.ID = $g AND oggetto.USER_EMAIL = $m";

if($conn->query($sqli) !== TRUE){

    $sql = "INSERT INTO proposta (PRICE, STATUS, DESCRIPTION, USER_EMAIL, OBJECT_ID)
    VALUES ($cash '$descrizione', $m, '$g')";

    if ($conn->query($sql) === TRUE) {  
        echo "oggetto inserito";
        header("location: ./benvenuto.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        header("location: ./oggetti.php");
    }
}else{
    header("location: ./oggetti.php");
}
$conn->close();

?>
</body>  