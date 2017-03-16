<?php
while(true) {
    if (PHP_OS == 'WINNT') {
        echo 'Skriv in lite text : ';
        $str = stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
        $str = readline('Skriv in lite text : ');
    }
    if (PHP_OS == 'WINNT') {
        echo 'Antal tecken per rad : ';
        $antal = stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
        $antal = readline('Antal tecken per rad : ');
    }
    //konvertera string till int, wordwrap arbetar med int.
    $iantal = intval($antal);
    $nytext = wordwrap($str, $iantal, "\n");

    echo "$nytext \n";
    exit();
}
?>
