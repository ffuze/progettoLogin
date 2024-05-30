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

$i = 0;
if ($result->num_rows > 0) {


  while($row = $result->fetch_assoc()) {

    echo "<form action='aggiungi_annuncio.php' method='post'>";
    echo "ID: -->" . $row["ID"]. "<-- , NOME: " . $row["NAME"]. ", DESCRIZIONE: " . $row["DESCRIPTION"]. 
    ", CATEGORIA: " . $row["CATEGORY_ID"]. ", EMAIL: " . $row["USER_EMAIL"]."  ";
    echo '<input type="submit" name="submit" value="w.i.p.">';
   
    if(isset($_POST['Submit'])){
      
    }
    echo "</form>";

    $i++;
    }
    echo "<br><br>";
    echo "<form action='aggiungi_annuncio.php' method='post'>";
    echo "id oggetto da comprare <br>";
    echo "<input type='number' value='id oggetto' name='no'><br>";
    echo '<input type="submit" value="inserisci offerta">';
    echo "</form>";
   
    

} else {
  echo "0 results";
}  

$conn->close();
?>





</body>
