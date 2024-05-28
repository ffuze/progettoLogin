<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercatino</title>
    <link rel="stylesheet" href="../css/stylesBenvenuto.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="navbar-brand" href="https://www.itismeucci.edu.it/"><img src="../images/meuccilogo.png" width="3%"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <li><a class="dropdown-item" href="profilo.php">Visualizza informazioni</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="welcome-box">
            <h1>Ciao, <?php echo $_SESSION["utente"]; ?>!</h1>
            <p>Benvenuto nel mercatino del Meucci. Cosa vuoi fare oggi?</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="option-box" onclick="location.href='aggiungi_oggetto.php';">
                    <i class='bx bx-plus-circle'></i>
                    <h2>Aggiungi oggetto</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="option-box" onclick="location.href='oggetti.php';">
                    <i class='bx bx-show'></i>
                    <h2>Visualizza oggetti</h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="option-box" onclick="location.href='profilo.php';">
                    <i class='bx bx-user'></i>
                    <h2>Profilo</h2>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>