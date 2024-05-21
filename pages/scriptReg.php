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

$email = $_POST["email"];
$password = $_POST["password"];
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$classe = $_POST["classe"];
$eta = $_POST["eta"];
$biografia = $_POST["biografia"];

$datiUtente = "SELECT * FROM utente WHERE email = '$email'";
$result = mysqli_query($conn, $datiUtente);

if(!$result) {
    if(isset($email) && isset($password) && isset($nome) && isset($cognome) && isset($classe) && isset($eta) && isset($biografia)){
        $query = "INSERT INTO utente (email, password, name, surname, class, age, biography)
        VALUES ('$email', '$password', '$nome', '$cognome', '$classe', '$eta', '$biografia')";

        $_SESSION["utente"] = $nome . " " . $cognome;
        $resultInsert = mysqli_query($conn, $query);
        $_SESSION['reg_success'] = "Registrazione completata con successo!";
        //header("Location: ../index.php");
        
    }
    else if(mysqli_num_rows($resultInsert) > 0){
        $_SESSION["errore_reg"] = "I dati che hai messo esistono già; prova a fare il login";
        header("Location: ../paginaReg.php");
    }
    else{
        $_SESSION["errore_reg"] = "Inserisci tutti i dati per poterti registrare";
        header("Location: ../paginaReg.php");
    }
}
else {
    $_SESSION["errore_reg"] = "Errore nell'inserimento dei dati" . mysqli_error($conn);
}


?>

</body>
</html>