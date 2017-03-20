<?php
function pecati($msg) {
    echo $msg;
}

// pecati("ispecati go ova");
// $a = "Druga vrednost za pecatenje";
// pecati($a);

// $a = 2;
// $b = $a; //2
// echo "a: $a, b: $b <br>";
// $a = 4;
// echo "a: $a, b: $b <br>";


function inc(&$var) {
    $var++;
    echo "var: $var <br>";
}
$a = 4;
inc($a);
echo "a: $a <br>";

function beautify($str) { //seDc Php MySqL
    // $str = strtolower($str); //sedc php mysqL
    // $str = ucwords($str); //Sedc Php MysqL
    $str = ucwords(strtolower($str));
    return $str;
}

function beautify2(&$str) { //seDc Php MySqL
    // $str = strtolower($str); //sedc php mysqL
    // $str = ucwords($str); //Sedc Php MysqL
    $str = ucwords(strtolower($str));
}


$title = "seDc Php MySqL";
// $title = beautify($title);
beautify2($title);
echo $title;
?>