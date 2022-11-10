<?php

// Simple Array
$numbers = [7, 44, 131, 90];
$fruits = array('raspberries', 'dragon fruit', 'mango');
print_r($numbers);
echo '<br>' . $fruits[1];

// Associative Array
$hex = [
    'red' => '#F00',
    'green' => '#0F0',
    'blue' => '#00F'
];
echo '<br>' . $hex['green'];

$person = array(
    'first_name' => 'Jonny',
    'last_name' => 'Noone',
    'age' => 32,
    'email' => 'jonnynoone@gold.com'
);
echo '<br>' . $person['email'];

// Multidimensional Array 
$people = [
    [
        'first_name' => 'Lucy',
        'last_name' => 'Quartz',
        'age' => 25,
        'email' => 'lucyq@silver.com'
    ],
    [
        'first_name' => 'Babush',
        'last_name' => 'Chutra',
        'age' => 37,
        'email' => 'bchut@winner.com'
    ]
];
echo '<p>' . $people[1]['last_name'] . '</p>';

// JSON
var_dump(json_encode($people));
// json_encode() - Returns the JSON representation of a value
// json_decode() - Takes a JSON encoded string and converts it into a PHP value.