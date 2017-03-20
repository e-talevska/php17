<?php 
function zbir($name, $lastName, $yearOfBirth) {
// echo "Hello! My name is $a $b";
    $greeting = ' ';
    if(date('H') >= 17 ) {
    	 $greeting = "Good Evening";
}  else {
	$greeting = "Hello!";
}
    echo "$greeting! My name is".$name." ".$lastName;
    echo "<br>";
    echo "I am born in year $yearOfBirth";
}
 
 
        zbir('Nikola', 'Loshkovski', '1994');
?>