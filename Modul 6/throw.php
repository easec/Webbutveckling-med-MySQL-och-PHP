<?php
// Sätter ett filnamn
// försöker att kopiera och därefter ta bort filen

$file = 'dummy.txt';

try {

    if (!file_exists($file))
    {

        throw new Exception("Fil '$file' hittades inte. \n");

    }

    if (file_exists("$file.new"))
    {

        throw new Exception("Destinationfil '$file.new' existerar redan. \n");
    }

    if (!copy($file, "$file.new"))
    {
        throw new Exception("Fil '$file' kunde inte kopieras. \n");
    }
    if (!unlink($file))
    {
        throw new Exception("Fil '$file' kunde inte tas bort. \n");
    }

}

catch (Exception $e)

{
    echo 'Oops! Fel uppstod rad ' . $e->getLine() . ': ' . $e->getMessage() ;
    exit();
}
echo 'LYCKADES: Operation på filen var lyckad.';
?>
