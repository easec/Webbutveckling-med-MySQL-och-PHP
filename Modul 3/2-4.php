<?php

if (PHP_OS == 'WINNT') {
    echo '$ Ange ett betyg (A-F):';
    $line = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
    $line = readline('$ Ange ett betyg (A-F):');
}

switch ($line) {
    case "a":
    case "A";
        echo "Perfekt, du är grym!\n";
        break;
    case "b":
    case "B";
        echo "Bra jobbat!\n";
        break;
    case "c":
    case "C";
        echo "Bra jobbat, lite mer kan du!\n";
        break;
    case "d":
    case "D";
        echo "Bra jobbat!\n";
        break;
    case "e":
    case "E";
        echo "Du är klar!\n";
        break;
    case "f":
    case "F";
        echo "Du har lite att arbeta med!\n";
        break;
    default: echo "Du har skrivit in fel betyg!";
}

?>
