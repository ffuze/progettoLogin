<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/stylesReg.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

session_start();

include "connessione.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $nome = $_POST["nome"];
    $cognome = $_POST["cognome"];
    $classe = $_POST["classe"];
    $eta = $_POST["eta"];
    $biografia = $_POST["biografia"];

    if(empty($email) || empty($password) || empty($nome) || empty($cognome) || empty($classe) || empty($eta) || empty($biografia)){
        $_SESSION["errore_reg"] = "Inserisci tutti i dati per poterti registrare";
        header("Location: ../paginaReg.php");
        exit();
    }

    $datiUtente = "SELECT * FROM utente WHERE email = '$email'";
    $result = mysqli_query($conn, $datiUtente);

    if(mysqli_num_rows($result) > 0){
        $_SESSION["errore_reg"] = "I dati che hai messo esistono già; prova a fare il login";
        header("Location: ../index.php");
        exit();
    }
    else{
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO utente (email, password, name, surname, class, age, biography) VALUES ('$email', '$hashed_password', '$nome', '$cognome', '$classe', '$eta', '$biografia')";
        
        if(mysqli_query($conn, $query)){
            $_SESSION["utente"] = $nome . " " . $cognome;
            $_SESSION['reg_success'] = "Registrazione completata con successo!";
            header("Location: ../index.php");
            exit();
        }
        else{
            $_SESSION["errore_reg"] = "Errore nell'inserimento dei dati: " . mysqli_error($conn);
            header("Location: ../paginaReg.php");
            exit();
        }
    }
}


?>

</body>
</html>