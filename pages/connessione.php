<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mercatinodb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    header("Location: erroreConn.php");
}
?>