<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
$_SESSION["favbil"] = "Volvo";
$_SESSION["favlag"] = "MFF";

echo "Sessionsvariabler satta!";
?>

</body>
</html>
