<?php

// subclass Exception

class MissingFileException extends Exception { }
class DuplicateFileException extends Exception { }
class FileIOException extends Exception { }

// Sätter ett filnamn
// försöker att kopiera och därefter tabort filen
$file = 'dummy.txt';
try {
    if (!file_exists($file))
    {
        throw new MissingFileException($file);
    }

    if (file_exists("$file.new"))

    {
        throw new DuplicateFileException("$file.new");
    }

    if (!copy($file, "$file.new"))
    {
        throw new FileIOException("$file.new");
    }

    if (!unlink($file))
    {
        throw new FileIOException($file);
    }
}
catch (MissingFileException $e)
{
    echo 'ERROR: Kunde inte hitta filen \'' . $e->getMessage() . '\'';
    echo "\n";
    exit();

}
catch (DuplicateFileException $e)

{
    echo 'ERROR: Destinationsfil \'' . $e->getMessage() . '\' existerar redan';
    echo "\n";
    exit();
}
catch (FileIOException $e)

{
    echo 'ERROR: Gick inte med input/output operationer fil \'' . $e->getMessage() . '\'';   exit();
}
catch (Exception $e)

{
    echo 'Oops! Fel uppstod rad ' . $e->getLine() . ': ' . $e->getMessage();
    echo "\n";
    exit();

}

echo "LYCKADES: Filoperationer lyckades.\n";
?>
