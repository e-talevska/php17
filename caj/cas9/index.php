<?php

    $users = array(
        "Mitko" => "Janeski",
        "Goce" => "Stamenkovski",
    );
    
    foreach($users as $ime => $prezime){
        echo $ime . " slusa muzika i se preziva $prezime" . "<br>";
    }
    
    // OBJECT ORIENTED PROGRAMING
    class User {
        var $firstName;
        var $lastName;
        var $subject;
        var $age;
        
        function __construct($firstName, $lastName, $subject) {
            //echo "Constructior called $param <br>";
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->subject = $subject;
        }
        
        function __destruct() {
            echo "Destructor called <br>";
        }
        
        function intro(){
            echo "I'm {$this->firstName} and my last name is {$this->lastName}<br>";
            echo implode(", ", $this->subject) . "<br>";
        }
    }
    
    $user1 = new User("Emilija", "Talevska", array("PHP", "MySQL", "Javascript"));
//    $user1->firstName = "Emilija";
//    $user1->lastName = "Petkovska";
//    $user1->subject = array("PHP", "MySQL", "Javascript");
    $user1->intro();
    
    $user2 = new User("Mitko", "Janeski", array("PHP", "SQL"));
//    $user2->firstName = "Mitko";
//    $user2->lastName = "Janeski";
//    $user2->subject = array("PHP", "SQL");
    $user2->intro();
    
    unset($user1, $user2);
    echo "end";
?>