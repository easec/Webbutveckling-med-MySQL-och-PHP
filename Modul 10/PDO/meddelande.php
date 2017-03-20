<?php
// Ansluta till databas
// Kontrollera anslutningen och exekvera SQL
    try { 
    	       $conn = new PDO('mysql:host=localhost;dbname=kontakt_db;charset=utf8', 'root', 'Pa$$w0rd');
    	       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	           $sql = 'SELECT * FROM meddelande_tbl';
	           $q = $conn->query($sql);
	           $q->setFetchMode(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e)
    	 {
		         die("Anslutning misslyckades: " . $e->getMessage());
    	 }
    $conn = null;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div id="meddelande">
	<h1>Meddelande</h1>
	<?php while ($row = $q->fetch()): ?>
	<br />
	Användare: <?php echo $row["anv_Namn"]; ?>
	<br />
	E-post: <?php echo $row["anv_Mail"]; ?>	
	<br />
	Tid: <?php echo $row["anv_MeddTS"]; ?>	
	<br />
	Meddelande: <?php echo $row["anv_Meddelande"]; ?>	
	<br />
	<?php endwhile; ?>
<br />
Slut på poster!
</div>
</body>
</html
