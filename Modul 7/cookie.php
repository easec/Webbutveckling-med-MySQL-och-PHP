<?php
	$for_namn = 'Mats';
	setcookie('for_namn',$for_namn,time() + (86400 * 7));
	?>
<html>
	<head>
		<title>Sätta och hämta cookie med PHP</title>
	</head>

<body>

<?php
echo 'Hejsan '.($_COOKIE['for_namn']!='' ? $_COOKIE['for_namn'] . "!" : 'Gäst');

?>
</body>

</html>
