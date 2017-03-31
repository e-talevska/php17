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
        // PRIVATE CANNOT MODIFY OUTSIDE VARIABLE
        private $age;
        private $email;
        
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
        
        function getEmail(){
            return $this->email;
        }
        
        function setEmail($email){
            // Check valid email
            // /^[a-zA-Z0-9_\-\.]+
            if(preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._]*@[a-zA-Z0-9]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/', $email)){
                $this->email = $email;
            }
        }
    }
    
    $user1 = new User("Emilija", "Talevska", array("PHP", "MySQL", "Javascript"));
//    $user1->firstName = "Emilija";
//    $user1->lastName = "Petkovska";
//    $user1->subject = array("PHP", "MySQL", "Javascript");
    $user1->setEmail("lou_diamonds2us@hotmail.com");
    echo $user1->getEmail();
    $user1->intro();
    
    $user2 = new User("Mitko", "Janeski", array("PHP", "SQL"));
//    $user2->age = "132";
//    $user2->firstName = "Mitko";
//    $user2->lastName = "Janeski";
//    $user2->subject = array("PHP", "SQL");
    $user2->intro();
    
    unset($user1, $user2);
    echo "end";
?>