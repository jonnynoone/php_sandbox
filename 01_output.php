<?php

// echo - Output strings, numbers etc.
echo 123, ' Hello ', 10.5;

// print - Works like echo but can only take single argument
print '<p>Might as well just use \'echo\' bro...</p>';

// print_r() - Print single values and arrays
// print_r([1, 2, 3]);

// var_dump() - Returns more info like data type and length
var_dump(true);

// var_export() - similiar to var_dump(), outputs a string representation of a variable
var_export('Hello');
?>

<?= "<p>A cheeky way to 'echo' - this feature needs to be enabled in server settings though.</p>"; ?>