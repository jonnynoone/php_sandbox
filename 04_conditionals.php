<?php

/* ------------ Operators ----------- */
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/


// If Statements

$age = 20;
if ($age >= 18) {
    echo 'You are old enough to party.<br>';
} else {
    echo 'Sorry, you are too young.<br>';
}

// Dates
// $today = date("F j, Y, g:i a");

$t = date("H");
if ($t < 12) {
    echo 'Good morning.<br>';
} elseif ($t < 17) {
    echo 'Good afternoon.<br>';
} else {
    echo 'Good evening.<br>';
}

// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exist.
// The empty() function will not generate any warning or e-notice when the variable does not exist.

$posts = ['First Post'];
if (!empty($posts)) {
    echo 'There are new posts.<br>';
    echo $posts[0];
} else {
    echo 'No posts.';
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

// Echo based on a condition (Same as above)
echo !empty($posts) ? $posts[0] : 'No Posts';

// Assign a variable based on a condition
// $first_post = !empty($posts) ? $posts[0] : 'No Posts';
$first_post = !empty($posts) ? $posts[0] : null;
echo $first_post;

// Null Coalescing Operator ?? (PHP 7.4)
// Will return null if $posts is empty
// Always returns first parameter, unless first parameter happens to be NULL
$new_post = $posts[0] ?? null;
var_dump($new_post);

/* -------- Switch Statements ------- */
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}