<!DOCTYPE html>
<html lang="sv">
<html>
<head>
<meta charset="UTF-8">
</head>
<body>

<?php

  //Anslutningsinformation
  $servername = 'localhost';
  $username = 'root';
  $password = 'Pa$$w0rd';
  $dbname = 'kontakt_db';


  // Skapa anslutning
  $conn = new mysqli($servername, $username, $password, $dbname);


    // Kontrollera anslutning
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Hämta från formulär
  $fnamn = $_POST['fnamn'];
  $enamn = $_POST['enamn'];
  $adress1 = $_POST['adress1'];
  $adress2 = htmlspecialchars($_POST['adress2']);
  $adress3 = htmlspecialchars($_POST['adress3']);
  $pnummer = htmlspecialchars($_POST['pnummer']);
  $postort = htmlspecialchars($_POST['postort']);
  $epost = htmlspecialchars($_POST['epost']);
  $ftelefon = htmlspecialchars($_POST['ftelefon']);
  $mtelefon = htmlspecialchars($_POST['mtelefon']);


  // Lägger till
  mysqli_query($conn, "INSERT INTO anv_tbl (`fnamn`, `enamn`, `adress1`, `pnummer`, `postort`, `epost`) VALUES ('$fnamn', '$enamn', '$adress1', '$pnummer', '$postort', '$epost')");
  
  // Stänger anslutning
  $conn->close(); 
  
  // Lägger upp formulär igen
  header("Location: laggatillanvmysqli.html");  
?>


</body>
</html>
