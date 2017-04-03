<?php

    require_once("fakultet.php");
    
    if(isset($_POST['submit'])){
        $name = $_POST['fakultet'];
        if(isset($_POST['fakultet'])){
            $fakultet = new \Fakulteti\Fakultet($name);
            $fakultet->save();
        }
    }
    else{
        $names = array("Mitko", "Goce", "Petar");
        
        foreach($names as $name){
            $fakultet = new \Fakulteti\Fakultet($name);
            $fakultet->save();
        }
    }