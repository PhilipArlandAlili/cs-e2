<?php

try {
    $result = 10 / 2;
    echo "This line won't be executed." . "<br>";
} catch (Exception $e) {
    echo "Caught exception: " . $e->getMessage() . "<br>";
} finally {
    echo "Finally block executed.";
}

?>
