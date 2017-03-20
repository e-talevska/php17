<?php 
// $eMail = "name@example.com";
// $user = strstr($eMail, '@' , true);
// $domain = substr(strstr($eMail , '@'), 1);
// echo $user . "<br>";
// echo $domain . "<br>";

$string = '082307';
$array = str_split($string, 2);
$newArray = implode(':', $array);
print_r($newArray);
var_dump($newArray);
?>