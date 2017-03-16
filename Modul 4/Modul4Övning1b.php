<?php
// Array för att spara resultat för varje kast
$rolls = array();

    if (PHP_OS == 'WINNT') {
        echo 'Ange antal kast : ';
        $kast = stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
        $kast = readline('Ange antal kast : ');
    }

// Kasta tärningen
for($i = 0; $i < $kast; $i++) {
    $rolls[] = rand(1, 6);
}

// Visa resultatet
foreach($rolls as $val) {
    echo "$val \n";
}
?>
