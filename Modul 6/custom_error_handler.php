<?php  header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title></title>
    <style type="text/css">
        .notice {
            font-weight: bolder;
            color: purple;
        }

        .warning {
            font-weight: bolder;
            font-size: 20px;
            color: red;
        }

        .error {
            font-weight: bolder;
            font-size: 20px;
            color: yellow;
        }
    </style>
</head>
<body>
    <?php // olika fel som skickas till skräddarsydd felhanterare
    set_error_handler('myHandler');
    // Rapportera alla fel
    error_reporting(E_ALL);
    // Generera fel
    echo $var;      // notice
    echo 25/0;      // warning
    // custom error handler
    function myHandler($type, $msg, $file, $line, $context)
    {
        $text = "Ett fel uppstod på rad $line när server skulle bearbeta din begäran.<br />
	<p><p>
        Felmeddelande: $type $msg<p>
	Var snäll och besök vår <a href=https://easec.se>hemsida</a> och försök igen.";
        switch($type) {
            case E_NOTICE:
                echo "<div class=\"notice\">$text</div><br />";
                break;
            case E_WARNING:
                echo "<div class=\"warning\">$text</div><br />";
                break;
            case E_ERROR:
                echo "<div class=\"error\">$text</div><br />";
                break;
        }
    }
    ?>  
