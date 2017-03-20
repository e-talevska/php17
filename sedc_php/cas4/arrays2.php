<?php
$niza1 = [2, 4, 5];
$niza2 = ["sedc", "php", "2017"];
var_dump($niza1 + $niza2);
var_dump(array_merge($niza1,$niza2));

$niza1 = array(2, 5, 6, 10, 41, 24, 32, 9, 16, 19);
$niza2 = array();
for($i=0; $i<count($niza1); $i++) {
    if($niza1[$i] > 20) {
        // array_push($niza2, $niza1[$i]);
        $niza2[] = $niza1[$i];
    }
}

var_dump($niza2);
?>