<?php

class Student {
    var $firstName;
    var $lastName;
    var $subjects;
    var $dob;
    
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
}

$student1 = new Student("Emilija", "Talevska", ['PHP', 'MySQL', "JavaScript"]);
//$student1->firstName = "Emilija";
$student1->lastName = "Doe";
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