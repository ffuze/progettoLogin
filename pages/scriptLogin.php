<?php
session_start();

include "connessione.php";

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM utente WHERE email = '$email'";
$result = $conn->query($sql);

if($result){
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])){
            header("Location: ./benvenuto.php");
            exit();
        }
        else{
            $_SESSION["errore_login"] = "Password errata";
            header("Location: ../index.php");
            exit();
        }
    }
    else{
        $_SESSION["errore_login"] = "Account non registrato";
        header("Location: ../index.php");
        exit();
    }
}
?>