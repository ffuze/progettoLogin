<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #divmain {
            background: rgba(232, 146, 85, 0.747);
            border-radius: 3;
            border-color: 
        }

        #divnotmain{
            background: rgba(232, 146, 85, 0.747);
        }
    </style>
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
                <a href="benvenuto.php" class="btn btn-primary">Torna al modulo</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>