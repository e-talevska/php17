<?php

class Student {
    var $firstName;
    var $lastName;
    var $subjects;
    private $dob;
    private $email;
            
    function __construct($firstName, $lastName, $subjects) {
        echo "Constructor called <br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
    }
    
    function __destruct() {
        echo "Destructor called <br>";
    }
            
    function intro() {
        echo "I am {$this->firstName} {$this->lastName} and my current subjects are: "
            . implode(", ", $this->subjects)
            . "<br>";
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function setEmail($email){
        //validacija
//        if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $this->email = $email;
//        }
        if(preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._]*@[a-zA-Z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/', $email)) {
            $this->email = $email;
        }
    }
}

$student1 = new Student("Emilija", "Talevska", ['PHP', 'MySQL', "JavaScript"]);
//$student1->firstName = "Emilija";
$student1->lastName = "Doe";

//not valid
//$student1->dob = "01.01.2000";

//if email address is valid
$student1->setEmail('e.talevska@hotmail.com');
echo $student1->getEmail();
//$student1->subjects = ['PHP', 'MySQL', "JavaScript"];
$student1->intro();

$student2 = new Student("John", "Doe", ['Math', 'Physics', "JavaScript"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ['Math', 'Physics', "JavaScript"];
$student2->intro();

echo "<pre>";
//var_dump($student1, $student2);
//destroy objects
unset($student1,$student2);
echo "end";