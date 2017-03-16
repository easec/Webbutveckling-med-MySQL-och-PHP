<html>
<head>
</head>
<body>

<?php

$servername = "localhost";

$username = "root";

$password = "Pa$$w0rd";

$dbname = "kontakt_db";


// Skapa anslutning
$conn = new mysqli($servername, $username, $password, $dbname);


// Kontrollera anslutning
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$anv_Namn = htmlspecialchars($_POST['anv_Namn']);
$anv_Mail = htmlspecialchars($_POST['anv_Mail']);
$anv_Meddelande = htmlspecialchars($_POST['anv_Meddelande']);
echo $anv_Namn . "<br />";
echo $anv_Mail . "<br />";
echo $anv_Meddelande . "<br />";
mysqli_query($conn, "INSERT INTO meddelande_tbl (`anv_Namn`, `anv_Mail`, `anv_Meddelande`) VALUES ('$anv_Namn', '$anv_Mail', '$anv_Meddelande')");




$conn->close(); 
header("Location: formkontakt.html");  
?>


</body>
</html>
