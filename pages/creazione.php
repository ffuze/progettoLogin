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
include "connessione.php";

$nome=$_POST["name"];
$descrizione=$_POST["desc"];
$categoria=$_POST["cat"];
$sqli = "SELECT ID FROM categoria where NAME='$categoria'";
$result = $conn->query($sqli);

if($result ->num_rows > 0) {
  $row = $result -> fetch_assoc();
  $s = $row["ID"];
  var_dump($row["ID"]);
  $f =  $_SESSION["mail"];


  $sql = "INSERT INTO oggetto (NAME, DESCRIPTION, CATEGORY_ID, USER_EMAIL)
  VALUES ('$nome', '$descrizione', $s, '$f')";

  if ($conn->query($sql) === TRUE) {
    echo "oggetto inserito";
    header("location: ./benvenuto.php");
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

$conn->close();
?>

</body>

