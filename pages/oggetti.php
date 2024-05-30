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

<?php
session_start();
include("connessione.php");

$sql = "SELECT * FROM oggetto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

  while($row = $result->fetch_assoc()) {
    echo "ID: " . $row["ID"]. ", NOME: " . $row["NAME"]. ", DESCRIZIONE: " . $row["DESCRIPTION"]. 
    ", CATEGORIA: " . $row["CATEGORY_ID"]. ", EMAIL: " . $row["USER_EMAIL"]."<br>";
    echo "<form action='aggiungi_annuncio.php' method='post'>";
    echo "<input type='submit' value='aggiungi_annuncio'>";
    if('aggiungi_annuncio'== null){
      $_SESSION["gesu"] = $row["ID"];
    }
    echo "</form>";
  }
} else {
  echo "0 results";
}  

$conn->close();

?>





</body>
