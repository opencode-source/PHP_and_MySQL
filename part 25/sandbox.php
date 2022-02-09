<?php

//  Working with Files

    // opening a file for reading
    $fileName = "text.txt";

    if(file_exists($fileName)){   
        $file = fopen($fileName, 'a+');
    } else {
        echo "File Not Found";
    }
    

    // read the file
        // $contents = fread($file, 100);
        // $contents = fread($file, filesize($fileName));
    

    // read a single line
        // echo fgets($file);
        // echo fgets($file);

    // read a single character
        // echo fgetc($file);

    // writing to a file
    // writing at the end of the file 
        // fwrite($file, "\nmahdi kazemi");

    //closing a file
        // fclose($file);

    //create a file
        file_put_contents('temp.txt', '');
    //delete a file
        unlink('temp.txt');
    














?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>More PHP Tutorials</title>
</head>
<body>
    
</body>
</html>