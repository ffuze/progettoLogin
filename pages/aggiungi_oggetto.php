<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aggiungi oggetto</title>
    <link rel="stylesheet" href="../css/stylesAggiungiOggetto.css">
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
                        <a class="navbar-brand" href="https://www.itismeucci.edu.it/" target="_blank"><img src="../images/meuccilogo.png" width="4%"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="benvenuto.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aggiungiOggetto.php">Aggiungi Oggetto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="oggetti.php">Visualizza Oggetti</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profilo
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="profilo.php">Visualizza Informazioni</a></li>
                            <li><a class="dropdown-item" onclick="confermaLogout()">Logout</a></li>
                            <div id="spinner" style="display: none;">Logout in corso...</div>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <h2>Aggiungi un nuovo oggetto</h2>
        <form action="creazione.php" method="post" enctype="multipart/form-data">
            <div class="input-box">
                <i class='bx bxs-box'></i>
                <input type="text" name="name" placeholder="Inserisci il nome" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-pencil'></i>
                <input type="text" name="desc" placeholder="Inserisci la descrizione" required>
            </div>
            <div class="input-box">
                <i class='bx bxs-category'></i>
                <select id="cat" name="cat" required>
                    <option value="" disabled selected style="color: #aaa;">Seleziona una categoria</option>
                    <option value="telefonia" style="color: black;">Telefonia</option>
                    <option value="videogiochi" style="color: black;">Videogiochi</option>
                    <option value="informatica" style="color: black;">Informatica</option>
                    <option value="libri" style="color: black;">Libri</option>
                </select>
            </div>
            <div class="input-box">
                <i class='bx bxs-image-add'></i>
                <input type="file" name="fileToUpload">
            </div>
            <input type="submit" class="btn" value="Submit">
        </form>
    </div>
    <?php
        if(isset($_SESSION["ogg_fail"])){
            echo "<div class='error-wrapper'>";
            echo "<i class='bx bx-error'><br><br></i>";
            echo "<p>" . $_SESSION['ogg_fail'] . "</p>";
            echo "</div>";
            unset($_SESSION['ogg_fail']);
        }
    ?>
    <script>
    function showSpinner() {
        document.getElementById('overlay').style.display = 'block';
    }

    function hideSpinner() {
        document.getElementById('overlay').style.display = 'none';
    }

    function confermaLogout() {
        var conferma = confirm("Sei sicuro di voler eseguire il logout?");
        if (conferma) {
            showSpinner();
            setTimeout(function() {
                window.location.href = "../index.php";
            }, 2000);
        } 
        else {
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
