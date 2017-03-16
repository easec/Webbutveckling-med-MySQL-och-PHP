<?php

// Börja med att inkludera definition för klass
include('CDice.php');


if (PHP_OS == 'WINNT') {
    echo 'Ange antal kast : ';
    $kast = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
    $kast = readline('Ange antal kast : ');
}

// Instansiserar klassen
$dice = new CDice();


$dice->Roll($kast);
$rolls = $dice->rolls;

// Visa resultatet

foreach($rolls as $val) {
    echo "$val \n";
}
$summa = $dice->GetTotal();
$snitt = $dice->GetAverage();

echo "Summan av dina kast: $summa\n";
echo "Snitt per kast: $snitt\n";
?>
