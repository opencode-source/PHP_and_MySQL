<?php

//indexed arrays

$peopleOne = ['mahdi', 'bahram', 'nader'];
$peopleTwo = array('atefe', 'maryam');

// echo $peopleTwo[1];

$numbers = [1,2,3,7,10];

// print_r($numbers);

$stuff = ['mahdi', 8, true];

// $stuff[] = 'atefe';
array_push($stuff, 'atefe');

$stuff[1] = 1;

$mixed = array_merge($stuff, $numbers);

// $name = array_pop($stuff);

// echo $name;

// echo count($stuff);

// print_r($mixed);




//associative arrays (key and value pairs)

$teamsOne = ['blue' => 'Esteghlal', 'red' => 'perspolice', 'yellow' => 'sepahan'];

$teamsTwo = array('orange' => 'foolad');

// echo $teamsOne['blue'];




//multi-dimensional arrays


$books = [
    ['book' => 'boof koor', 'author' => 'sadegh hedayat'],
    ['book' => 'kelidar', 'author' => 'mahmoud dowlatabadi'],
    ['book' => 'souvashoun', 'author' => 'simin daneshvar']
];

echo $books[1]['book'];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My PHP Project</title>
</head>
<body>

</body>
</html>
