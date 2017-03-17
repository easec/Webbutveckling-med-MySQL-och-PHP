<?php


// Hämta från formuläret

$fnamn = $_POST['fnamn'];
$enamn = $_POST['enamn'];
$adress1 = $_POST['adress1'];
$adress2 = $_POST['adress2'];
$adress3 = $_POST['adress3'];
$pnummer = $_POST['pnummer'];
$postort = $_POST['postort'];
$epost = $_POST['epost'];
$ftelefon = $_POST['ftelefon'];
$mtelefon = $_POST['mtelefon'];





try { 
    	$conn = new PDO('mysql:host=localhost;dbname=kontakt_db;charset=utf8', 'root', 'Pa$$w0rd');
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = "INSERT INTO anv_tbl (fnamn, enamn, adress1, adress2, adress3, pnummer, postort, epost, ftelefon, mtelefon) VALUES ('$fnamn', '$enamn', '$adress1', '$adress2', 'adress3', '$pnummer', '$postort', '$epost', 'ftelefon', 'mtelefon')";
$conn->exec($sql);
echo "Post inlagd!";
	}
catch(PDOException $e)
    	{
		die("Anslutning misslyckades: " . $e->getMessage());
    	}
$conn = null;
?>
