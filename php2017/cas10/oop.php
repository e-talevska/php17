<?php

class Student{
    var $firstName;
    var $lastName;
    var $subjects;
    private $dob;
    private $email;
            
    function __construct($firstName,$lastName,$subjects) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
    }
        
    function __destruct() {
        echo "destructor caled<br>";
    }
            
    function intro(){
        echo "I'am {$this->firstName} {$this->lastName} " . implode(", ", $this->subjects)."<br>";
    }
    
    function getEmail(){
        return $this->email;
    }
    function setEmail($email){
        //validacija za email
        if(preg_match("/^[a-zA-Z0-9][a-zA-Z0-9\._]*@[a-zA-Z]+\.[a-z]{2,3}(\.a-z{2,3})?$/", $email)){
            $this->email = $email;
        }
    }
}

$student1 = new Student("toni","tonevski",["php","MySQL","JavaScript"]);
//$student1->firstName = 'toni';
//$student1->lastName = 'tonevski';
//$student1->subjects = ["php","MySQL","JavaScript"];
//$student1 -> dob = "1441"; // not valid

$student1->setEmail('acevski48@gmail.com');

echo $student1->getEmail()."<br>";


$student1->intro();

$student2 = new Student("kole","kolev",["mat","mak","ger"]);
//$student2->firstName = 'kole';
//$student2->lastName = 'visev';
//$student2->subjects = ["mat","mak","ger"];
$student2->intro();


//destroy objects
unset($student1,$student2);

echo "end";