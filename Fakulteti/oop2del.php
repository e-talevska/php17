<?php

class Student {
    var $firstName;
    var $lastName;
    var $subjects;
    private $dob;
    private $email;
    
    function __construct($firstName , $lastName, $subjects){
//        echo "Constructor called  <br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
    }
    
    function __destruct(){
//        echo "Destructor  called <br>";
    }
            
    function intro(){
        echo "i am {$this->firstName} {$this->lastName} "
            . implode(", ", $this->subjects)
                . " <br>";
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($email){
        //validacija
        if(preg_match('/^[a-zA-Z0-9_\-\.]+@[a-zA-Z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/', $email)){
            $this->email = $email;
        } else {
            $this->email = "Enter Valid Mail";
        }
    }
    
}

$student1 = new Student("Emilija", "Talevska" ,['php', 'mysql', 'javascript']);
//$student1->firstName = "Emilija";
//$student1->lastName = "Talevska";
//$student1->subjects = ['php', 'mysql', 'javascript'];
$student1->intro();
echo "<br>";
//$student1->dob = "01.01.2000";
//if email address is valid
$student1->setEmail('trajanstevkovskigmail.com');
echo $student1->getEmail();
echo "<br>";

$student2 = new Student("John", "Doe", ['Math', 'Physics', 'javascript']);
echo "<br>";
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ['Math', 'Physics', 'javascript'];
$student2->intro();
echo "<br>";
//var_dump($student1, $student2);
//destroy objects
unset($student1, $student2);
echo "end";
