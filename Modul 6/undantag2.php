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
    echo "FEL: Fel uppstod!\n";
    echo "Felmeddelande: " . $e->getMessage() . "\n";
    echo "Felkod: " . $e->getCode() . "\n";
    echo "Filnamn: " . $e->getFile() . "\n";
    echo "Rad: " . $e->getLine() . "\n";
    echo "Backtrace: " . $e->getTraceAsString() . "\n";
}
?>
