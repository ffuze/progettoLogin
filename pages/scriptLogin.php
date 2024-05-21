<?php
session_start();

include "connessione.php";

$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM utente WHERE email = '$username'";
$result = $conn->query($sql);

if($result->num_rows = 0){
    $row = $result->fetch_assoc();
    if ($row['password'] == $password) {
        header("Location: ../benvenuto.php");
    }
    else {  
        $_SESSION["errore_login"] = "Password errata";
        header("Location: ../index.php");
    }
}
else{
    $_SESSION["errore_login"] = "Utente non trovato";
    header("Location: ../index.php");
}

?>