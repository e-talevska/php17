<?php

$student1 = ['ime'=>"alex",'prezime'=>"alexov",'predmeti'=>'mak,ang,span'];
$student2 = ['ime'=>"toni",'prezime'=>"tonev",'predmeti'=>'mak,ger,ita'];

foreach ($student1 as $key => $value) {
    echo $key ." - " .$value."<br>";
}
foreach ($student2 as $key => $value) {
    echo $key ." - " .$value."<br>";
}