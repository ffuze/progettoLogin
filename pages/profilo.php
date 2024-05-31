<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">    <link rel="stylesheet" href="../css/stylesProfilo.css">
</head>
<body>
    <?php
        session_start();
        include "connessione.php";
        // Query SQL per selezionare i dati dell'utente
        $email=$_SESSION["mail"];
        $sql = "SELECT name, surname, class, age, biography FROM utente WHERE email = ?";
        $stmt = $conn->prepare($sql);

        // Verifica se la preparazione della query è andata a buon fine
        if ($stmt === false) {
            die("Errore nella preparazione della query: " . $conn->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($nome, $cognome, $classe, $eta, $biografia);
        $stmt->fetch();
        $stmt->close();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top d-">
        <div class="container-fluid">
        <a class="navbar-brand d-flex" href="#"><img class="d-flex" src="../images/meuccilogo.png" width="30px"></a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="benvenuto.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aggiungi_oggetto.php">Aggiungi oggetto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="oggetti.php">Visualizza Oggetti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profilo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" onclick="confermaLogout()">Logout</a></li>
                            <div id="spinner" style="display: none;">Logout in corso...</div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5" id="divmain">
        <h2 class="mb-4">Dati Inseriti</h2>
        <div class="card" id="divnotmain">
            <div class="card-body">
                <h5 class="card-title">Informazioni Personali</h5>
                <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p class="card-text"><strong>Nome:</strong> <?php echo htmlspecialchars($nome); ?></p>
                <p class="card-text"><strong>Cognome:</strong> <?php echo htmlspecialchars($cognome); ?></p>
                <p class="card-text"><strong>Classe:</strong> <?php echo htmlspecialchars($classe); ?></p>
                <p class="card-text"><strong>Età:</strong> <?php echo htmlspecialchars($eta); ?></p>
                <?php
                if (!($biografia == "")) {
                    echo "<p class='card-text'><strong>Biografia: </strong>" . $biografia . "</p>";
                } ?>
                <a href="benvenuto.php" class="btn btn-primary">Torna alla home</a>
                <a href="cambiaprofilo.php" class="btn btn-primary">Modifica Dettagli Profilo</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>