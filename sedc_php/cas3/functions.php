<?php
function zbir($a, $b) {
    echo $a + $b;
    echo "<br>";
}
function zbir1($a, $b) {
    echo "<p>".($a + $b)."</p>";
}
function zbir2($a, $b) {
    return $a + $b;
}

zbir(3,4);
zbir(6,7);
zbir(23423, 2423);
$a = 2;
$b = 3;
zbir($a, $b); //zbir(2,3);
$x = 4;
$y = 2;
zbir($x, $y);

function intro($name, $lastName, $yearOfBirth = 2000) {
    $greeting = '';
    if(date('H') >= 17) {
        $greeting = "Good Evening";
    } else {
        $greeting = "Hello";
    }
    echo "$greeting! My name is $name $lastName. I am born in year $yearOfBirth";
    // echo "Hello! My name is ".$name." ".$lastName;
}
intro("Emilija", "Talevska", 3232);


function zadaca($firstName, $lastName, $flag = 0) {
    echo "<p>";
    if($flag == 0){
        echo $firstName . " " . $lastName;
    } else {
        echo $lastName . " " . $firstName;
    }

    echo "</p>";
}

zadaca("Emilija", "Talevska");

?>