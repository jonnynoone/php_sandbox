<?php

$y = 10;
function rememberScope() {
    global $y;
    echo $y . ' = Scope remembered.<br><br>';
}
rememberScope();

function registerUser($username) {
    echo "${username} registered.";
}
registerUser('Booku');

function sum($x = 2, $y = 2) {
    return $x + $y;
}
$small_summy = sum();
$big_summy = sum(43, 7);
echo "<p>${small_summy}</p>";
echo "<p>${big_summy}</p>";


// Assigning anonymous functions to variables.
// Often used for closures and callback functions
$subtract = function($n1, $n2) {
    return $n1 - $n2;
};

echo $subtract(10, 8);


// Arrow functions
$multiply = fn($num1, $num2) => $num1 * $num2;
echo '<br><br>' . $multiply(5, 5);