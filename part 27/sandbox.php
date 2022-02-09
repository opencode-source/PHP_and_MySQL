<?php

//  Classes



class User {

    private $name;
    private $email;

    public function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function login(){
        echo $this->name . " Logged In" . "<br>";
    }

    public function printInfo(){
        echo "Hello my Name is " . $this->name . "<br>";
    }

    // Getter
    public function getName(){
        echo $this->name . "<br>";
    }
    
    // Setter
    public function setName($name){
        if(is_string($name) && strlen($name) > 2){
            $this->name = $name;
            echo "Your Name has been Updated" . "<br>";
        }
    }

}

$userOne = new User("mahdi", "mahdi@gmail.com");

$userOne->getName();

$userOne->setName("nader");
$userOne->getName();






















?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>More PHP Tutorials</title>
</head>
<body>
    
</body>
</html>