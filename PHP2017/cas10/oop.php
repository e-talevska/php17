<?php

class Student {
    var $firstName;
    var $lastName;
    var $subjects;
    private $dob;
    private $email;
    
    function __construct($firstName, $lastName, $subjects) {
        echo "Constructor called  <br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
       
    }
    function __destruct() {
    //  echo "Destructor called <br>";
   }
            
    function intro(){
        echo "I am {$this->firstName}, {$this->lastName} and my subjects are:" . implode(", ", $this->subjects). "<br>";
        
    }
    function getEmail(){
        return $this->email;
       
        
    }
    function setEmail($email){
        //validacija
        if(preg_match('/^[a-zA-Z0-9][a-zA-Z0-9\._]*@[(hotmail)|(gmail)|[a-zA-Z]+\.[a-z]{2,3}(\.[a-z]{2,3})?$/', $email)){
            $this->email = $email; 
        }else {
            echo "Incorect email";
        }
    }
}

$student1 = new Student("Kire", "Kostov",['PHP', 'MySQL', "JavaScript"] );
//$student1->firstName = "Kire";
//$student1->lastName = "Kostov";
//$student1->subjects = ['PHP', 'MySQL', "JavaScript"];
$student1->intro();
//not valid
//$student1->dob="01.01.2017";
$student1->setEmail('e.talevska@hotmail.com');
echo $student1->getEmail(); 
echo "<br>";
$student2 = new Student("John", "Doe", ['math', 'physics', "english"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ['math', 'physics', "english"];
$student2->intro();
// var_dump($student1, $student2);

// destroy objects
unset($student1, $student2);
echo "END";