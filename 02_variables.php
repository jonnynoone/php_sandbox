<?php

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Jonny'; // String
$age = 32; // Integer
$has_kids = false; // Boolean
$cash_on_hand = 2.43; // Float

var_dump($cash_on_hand);

echo '<p>' . $name . ' is ' . $age . ' years old.</p>';
echo "<p>${name} is ${age} years old.</p>";

$x = '5' + '5';
var_dump($x); // int(10)


// CONSTANTS
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');
echo '<br>' . HOST;