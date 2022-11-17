<?php

function inverse($x) {
    if (!$x) {
        throw new Exception('Division by Zero');
    }

    return 1/$x;
}

try {
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception: ', $e->getMessage();
} finally {
    echo 'First Finally';
}

try {
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception: ', $e->getMessage();
} finally {
    echo 'Second Finally';
}

echo 'Hello, world.';