<?php
$servername = "localhost:3006";
$username = "root";
$password = "";
$dbname = "mercatinodb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header("Location: errore_loginReg.php");
}
?>