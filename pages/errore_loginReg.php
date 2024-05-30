<?php
session_start();

if(isset($_SESSION['errore'])){
    echo "<div class='error-wrapper'>";
    echo "<i class='bx bx-error'><br><br></i>";
    echo "<p>" . $_SESSION['errore'] . "</p>";
    echo "</div>";
    unset($_SESSION['errore']);
}
?>

<p>Torna alla pagina di <a href="../index.php">login</a></p>
