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
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);
    $nome = trim($_POST["nome"]);
    $cognome = trim($_POST["cognome"]);
    $classe = trim($_POST["classe"]);
    $eta = trim($_POST["eta"]);

    if(empty($email) || empty($password) || empty($nome) || empty($cognome) || empty($classe) || empty($eta)){
        $_SESSION["errore_reg"] = "Inserisci tutti i dati per poterti registrare";
        header("Location: ../paginaReg.php");
        exit();
    }

    $datiUtente = $conn->prepare("SELECT * FROM utente WHERE email = ?");
    $datiUtente->bind_param("s", $email);
    $datiUtente->execute();
    $result = $datiUtente->get_result();

    if($result->num_rows > 0){
        $_SESSION["errore_regdati"] = "L'email inserita è gia registrata, prova ad usarne un'altra o a fare il login";
        header("Location: ../index.php");
        exit();
    }
    else {
        $hashed_password = hash("sha256",$password);
        $query = $conn->prepare("INSERT INTO utente (email, password, name, surname, class, age, biography) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $query->bind_param("sssssis", $email, $hashed_password, $nome, $cognome, $classe, $eta, $biografia);
        
        if($query->execute()){
            $_SESSION["utente"] = $nome . " " . $cognome;
            $_SESSION["mail"] = $email;
            $_SESSION['reg_success'] = "Registrazione completata con successo!";
            header("Location: ../index.php");
            exit();
        }
        else {
            $_SESSION["errore_reg"] = "Errore nell'inserimento dei dati: " . $conn->error;
            header("Location: ../paginaReg.php");
            exit();
        }
    }

    $datiUtente->close();
    $query->close();
}

$conn->close();

?>

</body>
</html>