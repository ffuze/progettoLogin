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

$datiUtente = "SELECT * FROM utente WHERE EMAIL = '$email' AND NAME = '$nome' AND SURNAME = '$cognome'";
$result = mysqli_query($conn, $datiUtente);

if(isset($email) && isset($password) && isset($nome) && isset($cognome) && isset($classe) && isset($eta) && isset($biografia)){
    $query = "INSERT INTO utente (email, password, name, surname, class, age, biography)
    VALUES ('$email', '$password', '$nome', '$cognome', '$classe', '$eta', '$biografia')";

    $result = mysqli_query($conn, $query);
    if($result) {
        header("Location: ../index.php");
        echo "<p class=\"text-success\">Utente registrato con successo</p>";
    }
    else {
        $_SESSION["errore_reg"] = "Errore nell'inserimento dei dati" . mysqli_error($conn);
    }
}
else if(mysqli_num_rows($result) > 0){
    $_SESSION["errore_reg"] = "I dati che hai messo esistono già; prova a fare il login";
    header("Location: ../paginaReg.php");
}
else{
    $_SESSION["errore_reg"] = "Inserisci tutti i dati per poterti registrare";
    header("Location: ../paginaReg.php");
}

?>