<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/stylesLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="pages/scriptLogin.php" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" id="username" name="username" placeholder="Username" required><br>
            </div>
            <div class="input-box">
                <i class='bx bxs-lock-alt'></i>    
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
            <div class="ricordami-psw">
                <label><input type="checkbox">Ricordami</label>
                
                <a href="passwordDimenticata.php">Password dimenticata?</a>
            </div>
            <br>
            <input type="submit" class="btn" value="Login">
            <div class="no-account">
                <p>Non hai un account? <a href="./paginaReg.php">Registrati</a></p>
            </div>
        </form>
    </div>

    <?php
    if(isset($_SESSION['errore_login'])){
        echo "<p style='color:red;'>" . $_SESSION['errore_login'] . "</p>";
        unset($_SESSION['errore_login']);
    }
    ?>
</body>
</html>