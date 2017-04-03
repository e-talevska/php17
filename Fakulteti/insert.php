<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    require 'fakilteti.php';
    
    if(trim($name) != ""){
        $fakultet = new Fakulteti\Fakultet($name);
        $fakultet->save();
    }
} else {
    require 'fakilteti.php';
    $names = ['Feit', 'Finki', 'SEDC', 'Medicina'];
    foreach ($names as $name) {
        $fakultet = new Fakulteti\Fakultet($name);
        $fakultet->save();
    }
}
