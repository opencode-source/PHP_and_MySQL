<?php 

$people[] = "Mahdi";
$people[] = "Atefe";
$people[] = "Bita";
$people[] = "Arash";
$people[] = "Babak";
$people[] = "Sina";
$people[] = "Behnam";
$people[] = "Farid";
$people[] = "Aram";
$people[] = "Bardia";
$people[] = "Shayan";
$people[] = "Rambod";
$people[] = "Sheyda";
$people[] = "Raha";
$people[] = "Saman";
$people[] = "Bahram";
$people[] = "Nima";
$people[] = "Shahrzad";
$people[] = "Farzad";
$people[] = "Mahan";
$people[] = "Ramin";
$people[] = "Mehrdad";
$people[] = "Maryam";
$people[] = "Pega";
$people[] = "Nader";
$people[] = "Afsane";
$people[] = "Parasto";
$people[] = "Sara";
$people[] = "Zahra";
$people[] = "Fereshte";
$people[] = "Kimia";
$people[] = "Mahshid";
$people[] = "Hayde";


$q = $_GET['q'];

$suggestion = "";


if($q !== ""){
    $q = strtolower($q);
    $len = strlen($q);

    foreach($people as $person){
        if( stristr(substr($person, 0, $len), $q) ){
            if($suggestion === ""){
                $suggestion = $person;
            } else {
                $suggestion .= ", $person";
            }
        }
    }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;

?>