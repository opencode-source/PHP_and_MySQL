<?php

//Functions

// function sayHello($name){
//     echo "Hello $name" . '<br>';
// }

// sayHello('mahdi');
// sayHello('bahram');
// sayHello('nader');

// function sum($a, $b){
//     $sum = $a + $b;
//     return $sum;
// }

// $result = sum(2, 6);
// echo $result;

// $result = sum(4, 6);
// echo $result;

// $result = sum(1, 7);
// echo $result;






//Variable Scope (Local and Global)

// function myFunc(){
//     $name = 'mahdi';
//     echo "Hello $name";
// }

// myFunc();
// echo $name;

// function myFuncTwo($name){
//     echo "Hello $name";
// }

// myFuncTwo('mahdi');
// echo $name;


$name = 'mahdi';

function myFunc(){
    global $name;
    $name = 'bahram';
    echo "Hello $name" . '<br>';
}

myFunc();
echo $name;












?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My PHP Project</title>
</head>
<body>
   
</body>
</html>
