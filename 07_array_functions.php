<?php

$fruits = ['apple', 'orange', 'pear'];

// Get length of array
// echo count($fruits);

// Search array 
// echo in_array('apple', $fruits);

// Add to array
$fruits[] = 'grapes';
array_push($fruits, 'melon', 'mango');
array_unshift($fruits, 'banana');
var_dump($fruits);

// Remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[2]);
var_dump($fruits);

// Split array into chunks of 2
$chunked_array = array_chunk($fruits, 2);
var_dump($chunked_array);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [0, ...$arr1, 3.5,  ...$arr2, 7];
var_dump($arr4);

// Use 1st arr for keys and 2nd arr for values in new array 
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
var_dump($c);

// Create an array of keys 
$keys = array_keys($c);
var_dump($keys);

// Swap keys and values
$flipped = array_flip($c);
var_dump($flipped);

// Array map
$numbers = range(1, 20);
$newNumbers = array_map(function($num) {
    return "Number ${num}";
}, $numbers);
var_dump($newNumbers);

// Array filter
$lessThan10 = array_filter($numbers, fn($n) => $n < 10);
var_dump($lessThan10); die();

// Array reduce
$sum = array_reduce($numbers, fn($carry, $num) => $carry + $num);
echo $sum;