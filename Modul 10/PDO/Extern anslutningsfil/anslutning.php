<?php
  // Sätter upp variabler för anslutningen, DSN är lättare att använda om annan SQL Server skall användas
  // Separat fil för databasanslutning

  $dsn      = 'mysql:host=localhost;dbname=kontakt_db;';
  $login    = 'root';
  $password = 'Pa$$w0rd';
  $options  = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");
?>
