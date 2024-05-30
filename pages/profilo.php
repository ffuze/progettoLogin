<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/stylesProfilo.css">
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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand" href="https://www.itismeucci.edu.it/" target="_blank"><img src="../images/meuccilogo.png" width="4%"></a>
                    </li>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>