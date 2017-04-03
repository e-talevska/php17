<?php

    class Player{
        var $username;
        var $agility;
        var $magic;
        var $strenght;
        var $exp;
        var $double_exp;
        
        function __construct($username, $agility, $magic, $strenght, $exp, $double_exp){
            $this->username = $username;
            $this->agility = $agility;
            $this->magic = $magic;
            $this->strenght = $strenght;
            $this->exp = $exp;
            $this->double_exp = $double_exp;
        }
        
        function totalExp(){
            return $this->exp * 2;
        }
        
        function combat(){
            return $this->agility + $this->magic + $this->strenght;
        }
    }
    
    class Level extends Player{
        function __construct($username, $agility, $magic, $strenght, $exp){
            parent::__construct($username, $agility, $magic, $strenght, $exp, 2);
        }
        
        function doubleExp(){
            return $this->exp * $this->double_exp;
        }
    }
    
    $player = new Player($_POST['username'], $_POST['agility'], $_POST['magic'], $_POST['strenght'], $_POST['exp'], $_POST['double_exp']);
    $level = new Level($_POST['username'], $_POST['agility'], $_POST['magic'], $_POST['strenght'], $_POST['exp'], $_POST['double_exp']);
    echo "<pre>";
    var_dump($player);
    var_dump($level);
    echo "</pre>";
    
    echo "Your combat level is ". $player->combat();
    echo "<br>";
    echo "Your combat with double exp is ". $level->doubleExp();
?>