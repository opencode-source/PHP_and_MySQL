<?php

//for
// echo 'Hello, World';
// echo '<br>';
// echo 'Hello, World';
// echo '<br>';
// echo 'Hello, World';
// echo '<br>';
// echo 'Hello, World';
// echo '<br>';
// echo 'Hello, World';
// echo '<br>';

// for($i=0; $i<3; $i++){
//     echo 'Hello, World';
//     echo '<br>';
// }

// $names = ['mahdi', 'atefe'];

// for($i=0; $i<count($names); $i++){
//     echo $names[$i]. '<br>';
// }

// foreach($names as $name){
//     echo $name . '<br>';
// }

$movies = [
    ['name' => 'Spider-Man: No Way Home', 'year' => 2021, 'rate' => 8.9],
    ['name' => 'The Matrix Resurrections', 'year' => 2021, 'rate' => 5.8],
    ['name' => 'Encanto', 'year' => 2021, 'rate' => 7.3],
    ['name' => 'The Nun', 'year' => 2018, 'rate' => 5.3],
    ['name' => '6 Underground', 'year' => 2019, 'rate' => 6.1],
    ['name' => 'Baywatch', 'year' => 2017, 'rate' => 5.5],
    ['name' => '47 Meters Down', 'year' => 2017, 'rate' => 5.7]
]



//while

// $i=0;
// while($i<count($names)){
//     echo $names[$i]. '<br>';

//     $i++;
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>My PHP Project</title>
</head>
<body>
    <h1>Movies</h1>
    <?php foreach($movies as $movie){ ?>
        <h3><?php echo $movie['name'] . ' - ' . $movie['year'] ?></h3>
        <p>rate: <?php echo $movie['rate'] ?>/10 </p>
    <?php } ?>
</body>
</html>
