<?php
// definierar array
$cities = array(   "United Kingdom" => "London",   "United States" => "Washington" );

// Försök att access till icke existerande element i array
// kommer att generera OutOfBoundsException
// output: 'Exception: Seek position 10 is out of range'

try {

    $iterator = new ArrayIterator($cities);
    $iterator->seek(10);
}

catch (Exception $e)
{
    echo "Felmeddelande: \n $e";  // I $e lagras felmeddelande
    echo "ERROR: Ett undantag uppstod i ditt script.\n";
}
?>
