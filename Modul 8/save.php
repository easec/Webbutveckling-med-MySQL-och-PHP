<!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
	</head>
	<body>
		<h2>Min filuppladdning</h2>
			<?php

				$uploaddir = '/tmp/';
				$uploadfile = $uploaddir . basename($_FILES['file']['name']);

				echo '<pre>';


				if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
				{
					echo "Fil är godkänd och har blivit uppladdad.\n";
				} else  {
					echo "Det fungerar inte.\n";
				}
				print_r($_FILES);
				print "</pre>";

			?>
	</body>
</html>
