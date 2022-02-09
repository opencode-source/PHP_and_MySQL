<?php

//  Working with JSON Files

// opening json file
$fileName = "colorsName2.json";
if(file_exists($fileName)){
    $file = fopen($fileName, 'r');
} else {
    echo "File Not Found";
}

// read json file
$contents = fread($file, filesize($fileName));

// convert to json - as array
$array = json_decode($contents, true);

// print_r($array);
// echo $array['bisque'];

// echo $array['colors'][0]['color'];

// $colors = $array['colors'];
// $color = $colors[0];
// $colorName = $color['color'];
// echo $colorName;


// $colors = $array['colors'];
// foreach($colors as $color){
//     echo $color['code']['hex'] . '<br>';
// }








$colors = ["aliceblue" => "#f0f8ff", "antiquewhite" => "#faebd7"];

// convert array to json
$colorsToJson = json_encode($colors);

// add json to a file
file_put_contents('colors.json', $colorsToJson);



    












// convert to json - as object
    // $object = json_decode($contents);
    // echo $object->bisque;






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>More PHP Tutorials</title>
</head>
<body>
    
</body>
</html>