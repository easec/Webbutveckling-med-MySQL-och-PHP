<!DOCTYPE html>
<html lang="sv">
<html>
  <head>
    <meta charset="UTF-8">
  </head>
  <body>
  <h2>Användare</h2>
  <?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'Pa$$w0rd';
    $dbname = 'kontakt_db';


// Skapa anslutning
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, "utf8");

// Kontrollera anslutning
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

  echo "<br />";

  $sql = "SELECT * FROM anv_tbl";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
  
  // Lägg ut information för varje rad

    while($row = $result->fetch_assoc()) {

        echo "Id: " . $row["anv_id"] . "<br />" . "Förnamn: " . $row["fnamn"] . "<br />" . "   Efternamn: " . $row["enamn"] . "<br />" . "Adress: " . $row["adress1"] . "<br />" . "Postnummer: " . $row["pnummer"] . "  Postort : " . $row["postort"] . "<br />" . "E-post : " . $row["epost"] . "<br /><br />";

    }
  } else {
    echo "0 results";
  }
  echo "<br />";
  echo "Slut på poster!";
  
  // Stäng anslutningen
  $conn->close();   
?>

</body>
</html>
