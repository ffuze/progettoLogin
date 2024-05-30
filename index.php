<?php
    session_start();
    if(isset($_SESSION['errore_login'])){
        echo "<div class='error-wrapper'>";
        echo "<i class='bx bx-error'><br><br></i>";
        echo "<p>" . $_SESSION['errore_login'] . "</p>";
        echo "</div>";
        unset($_SESSION['errore_login']);
    }
    if(isset($_SESSION['reg_success'])){
        echo "<div class='reg-success-wrapper'>";
        echo "<i class='bx bxs-party'><br><br></i>";
        echo "<p>" . $_SESSION['reg_success'] . "</p>";
        echo "</div>";
        unset($_SESSION['reg_success']);
    }
    if(isset($_SESSION['errore_regdati'])){
        echo "<div class='error-wrapper'>";
        echo "<i class='bx bx-error'><br><br></i>";
        echo "<p>" . $_SESSION['errore_regdati'] . "</p>";
        echo "</div>";
        unset($_SESSION['errore_regdati']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/stylesLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById('password');
            var passwordIcon = document.getElementById('togglePassword');

            if(passwordInput.type === 'password'){
                passwordInput.type = 'text';
                passwordIcon.classList.remove('bxs-hide');
                passwordIcon.classList.add('bx-show');
            }
            else{
                passwordInput.type = 'password';
                passwordIcon.classList.remove('bx-show');
                passwordIcon.classList.add('bxs-hide');
            }
        }
    </script>
</head>
<body>
    <div class="wrapper">
        <form action="pages/scriptLogin.php" method="post">
            <h2>Login</h2>
            <div class="input-box">
                <i class='bx bxs-user'></i>
                <input type="text" id="email" name="email" placeholder="E-mail" required><br>
            </div>
            <div class="input-box">
                <i class='bx bxs-hide' id="togglePassword"></i>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
            <br>
            <input type="submit" class="btn" value="Login">
            <div class="no-account">
                <p>Non hai un account? <a href="./paginaReg.php">Registrati</a></p>
            </div>
        </form>
    </div>
    <script>
        document.getElementById('togglePassword').addEventListener('click', togglePasswordVisibility);
    </script>
</body>
</html>