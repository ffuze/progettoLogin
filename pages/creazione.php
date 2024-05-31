<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oggetti</title>
    <link rel="stylesheet" href="./css/stylesLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

<?php
    session_start();
    include "connessione.php";

    if(!isset($_SESSION["mail"])){
        echo "Accesso negato. Si prega di effettuare il login.";
        exit();
    }

    if (isset($_POST["name"]) && isset($_POST["desc"]) && isset($_POST["cat"]) && isset($_FILES["fileToUpload"])) {
        $nome = $conn->real_escape_string($_POST["name"]);
        $descrizione = $conn->real_escape_string($_POST["desc"]);
        $categoria = $conn->real_escape_string($_POST["cat"]);
        $file = $_FILES['fileToUpload']['tmp_name'];
        $fileContent = addslashes(file_get_contents($file));

        $stmt = $conn->prepare("SELECT ID FROM categoria WHERE NAME = ?");
        $stmt->bind_param("s", $categoria);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $s = $row["ID"];
            $f = $_SESSION["mail"];

            $stmt = $conn->prepare("INSERT INTO oggetto (NAME, DESCRIPTION, CATEGORY_ID, USER_EMAIL) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssis", $nome, $descrizione, $s, $f);

            if ($stmt->execute() === TRUE) {
                $last_id = $conn->insert_id;

                $stmt_image = $conn->prepare("INSERT INTO foto (oggetto_id, immagine) VALUES (?, ?)");
                $stmt_image->bind_param("is", $last_id, $fileContent);

                if($stmt_image->execute() === TRUE){
                    $_SESSION["ogg_success"] = "Oggetto e foto inseriti con successo!";
                    header("Location: ./benvenuto.php");
                    exit();
                }
                else{
                    $_SESSION["ogg_fail"] = "Errore nel salvataggio dell'immagine: " . $stmt_image->error;
                    header("Location: ./aggiungi_oggetto.php");
                    exit();
                }
            }
            else {
                $_SESSION["ogg_fail"] = "Errore: " . $stmt->error;
                header("Location: ./aggiungi_oggetto.php");
                exit();
            }
        }
        else {
            $_SESSION["ogg_fail"] = "Categoria non trovata";
            header("Location: ./aggiungi_oggetto.php");
            exit();
        }

        $stmt->close();
    }
    else {
        $_SESSION["ogg_fail"] = "Tutti i campi sono obbligatori";
        header("Location: ./aggiungi_oggetto.php");
        exit();
    }

    $conn->close();
?>

</body>
</html>
