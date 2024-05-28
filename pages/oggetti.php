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
$_SESSION["id_oggetto"];
$sql = "SELECT * FROM oggetto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - nome: " . $row["NAME"]. " DESCRIZIONE: " . $row["DESCRIPTION"]. 
    " categoria: " . $row["CATEGORY_ID"]. " email: " . $row["USER_EMAIL"]."<br>";
    echo "<form action='aggiungi_annuncio.php' method='post'>";

    echo '<input type="submit" value="aggiungi_annuncio" onclick='.$_SESSION["id_oggetto"] = $row["ID"].'>';
    
    echo "</form>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>





</body>
