<?php
session_start();

if(isset($_SESSION['errore'])){
    echo "<p style='color:red;'>".$_SESSION['errore']."</p>";
    unset($_SESSION['errore']);
}
?>

<p>Torna alla pagina di <a href="../index.php">login</a></p>
