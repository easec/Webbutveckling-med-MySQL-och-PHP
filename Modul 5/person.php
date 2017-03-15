<?php
/**
* Använder klassen CPerson.php
*
*@version 1.0
*@author Mats Johannesson   easec.se
*/
// Inkluderar klassen
include('CPerson.php');
/** instansierar klassen till $person
* Namnet skickas in till constructor
*/
$person = new CPerson("Mats Johannesson");
// Kallar på metoden get_name som finns definierad i klassen
echo "Persons hela namn : ".$person->get_name() . "\n";

// Kallar på metoden set_name som finns definierad i klassen
echo "Ändra namn ".$person->set_namn("Kalle Hult") . "\n";

// Kallar på metoden get_name som finns definierad i klassen
echo "Persons hela namn : ".$person->get_name() . "\n";

?>
