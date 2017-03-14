<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
echo "Favoritbilmärke är " . $_SESSION["favbil"] . ".<br>";

echo "Favoritlag är " . $_SESSION["favlag"] . ".<br>";

?>


</body>
</html>
