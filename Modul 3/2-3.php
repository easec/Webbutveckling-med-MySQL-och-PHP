<?php
// För att vi använder Visual Studio, readline finns inte implementerat!

if (PHP_OS == 'WINNT') {
    	echo '$ Ange alternativ (1-3)';
    	$line = stream_get_line(STDIN, 1024, PHP_EOL);
} else {
   	$line = readline('$ Ange alternativ (1-3)');
}

switch ($line) {
	case "1":
		echo "Alternativ 1 matades in!\n";
		break;
	case "2":
		echo "Alternativ 2 matades in!\n";
		break;
	case "3":
		echo "Alternativ 3 matades in!\n";
		break;
    	default: echo "Varkens Alternativ 1, 2 eller 3 matades in!";
}

?>
