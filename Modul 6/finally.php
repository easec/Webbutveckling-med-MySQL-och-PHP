<?php
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
}
catch (Exception $e) {
    echo 'Undantag: ',  $e->getMessage(), "\n";
}
finally {
    echo "1:a finally.\n";
}

try {
    echo inverse(0) . "\n";
}
catch (Exception $e) {
    echo 'Undantag: ',  $e->getMessage(), "\n";
}
finally {
    echo "2:a finally.\n";
}

// Fortsätt exekvering
echo "tillbaks till programkod efter undantag.\n";
echo "Hello World\n";
?>
