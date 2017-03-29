<?php

class Student {
    var $firstName;
    var $lastName;
    var $subjects;
    var $dob;
    
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
}

$student1 = new Student("Kire", "Kostov",['PHP', 'MySQL', "JavaScript"] );
//$student1->firstName = "Kire";
//$student1->lastName = "Kostov";
//$student1->subjects = ['PHP', 'MySQL', "JavaScript"];
$student1->intro();

$student2 = new Student("John", "Doe", ['math', 'physics', "english"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ['math', 'physics', "english"];
$student2->intro();
// var_dump($student1, $student2);

// destroy objects
unset($student1, $student2);
echo "END";