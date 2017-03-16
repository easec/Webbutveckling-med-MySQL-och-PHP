<?php
while(true) {
    if (PHP_OS == 'WINNT') {
        echo 'Ange ett ord : ';
        $str = stream_get_line(STDIN, 1024, PHP_EOL);
    } else {
        $str = readline('Ange ett ord : ');
    }
    $tecken = iconv_strlen($str);

    echo "Antal tecken i ordet du angav : $tecken \n";
    exit();
}
?>
