<?php
require 'fakultet.php';//da moze da se koristi class Fakultet
if (isset($_POST['submit'])){
    
    $name = $_POST['name'];

    if (trim($name) != ""){
//        $file = new File("db/db.csv", "a+");//ako !="" smesti go vo db.csv
//        $file->write([$name]);//function zapisi
        $fakultet = new \Fakulteti\Fakultet($name);
        $fakultet->save();
    }
} else {
    
    $names = ['feit', 'ugd', 'sedc'];//na eden request 3 izvrsuvanja, ke gi zapise 1, 2, 3 vo db.csv
    foreach ($names as $name){
        
        $fakultet= new \Fakulteti\Fakultet($name);
        $fakultet->save();
    }
}