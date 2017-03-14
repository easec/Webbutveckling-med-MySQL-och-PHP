<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <title>Extra övning formulär</title>
</head>
<body>
    <?php
        // Kontrollerar GET-variabeln om den matchar staden Malmö
        switch ($_GET['city']) {
            case 'Malmö':
                echo 'Välkommen till Malmö!';
                break;
            default:
                echo 'Vill du inte hellre åka till Malmö?';
                break;
        }
    ?>
</body>
</html>
