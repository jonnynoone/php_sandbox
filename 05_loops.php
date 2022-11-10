<?php

// For Loop
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
}

// While Loop
$x = 1;
while($x <= 15) {
    echo 'Number' . $x . '<br>';
    $x++;
}

// Do While Loop
$y = 1;
do {
    // Always executes this block at least once
    echo $y . '<br>';
    $y++;
} while($y <= 5);


$posts = ['First', 'Second', 'Third'];

for($j = 0; $j < sizeof($posts); $j++) {
    echo $posts[$j] . '<br>';
}

// Foreach Loop
foreach($posts as $index => $post) {
    echo $index + 1 . ' - ' . $post . '<br>';
}

$person = [
    'first_name' => 'Grant',
    'last_name' => 'Bonwagger',
    'age' => 43
];

foreach($person as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}