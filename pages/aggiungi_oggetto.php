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
<form action="creazione.php"  method="post" enctype="multipart/form-data">

    insersci il nome <br>
    <input type="text" name="name"><br><br>

    insersci la descrizione <br>
    <input type="text" name="desc"><br><br>
    
    seleziona una categoria <br>
    <div class="input-box">
        <select id="cat" name="cat">
            <option style="color: black" value="telefonia">telefonia</option>
			<option style="color: black" value="videogiochi">videogiochi</option>
			<option style="color: black" value="informatica">informatica</option>
        	<option style="color: black" value="libri">libri</option>
        </select>
    </div><br>

        
            seleziona l'immagine: <br>
        <input type="file" name="fileToUpload"><br><br>
        
        <?php
/*
$target_dir = "upload/";
$target_file = $target_dir . $_FILES[$fileToUpload]["name"];

if(move_uploaded_file($_FILES[$fileToUpload]["name"], $target_file)){
    echo" il file è stato caricato correttamente";
}else{
    echo "errore durante il caricamento";
}
*/
?>
    <input type="submit" value="submit">
</form>

</body>
