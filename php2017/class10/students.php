<?php

class Student {
   var  $firstName;
   var  $lastName;
   var  $subjects;
   var  $dob;
   
   
   function __construct($firstName, $lastName, $subjects) {
       echo "Constructor called  <br>" ;
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->subjects = $subjects;
   }
   function __destruct() {
       echo "Destructor called <br>";
       
   }
   function intro() {
       echo "I am {$this->firstName} {$this->lastName} and my current subjects are: " 
             . implode(",", $this->subjects)
             . "<br>";
       
   }
}

$student1 = new Student("Nikola", "Loshkovski", ['PHP' , 'MySQL' , 'JavaScript']);
//$student1->firstName = "Nikola";
//$student1->lastNamer = "Loshkovski";
//$student1->subjects = ['PHP' , 'MySQL' , 'JavaScript'];
$student1->intro();

$student2 = new Student("John", "Lock", ['Java' , 'C++' , 'C#']);
//$student2->firstName = "John";
//$student2->lastNamer = "Lock";
//$student2->subjects = ['Java' , 'C++' , 'C#'];
$student2->intro();

echo"<pre>";
//var_dump($student1,$student2);$student1->intro();
//destroy objects
unset($student1,$student2);
echo "end";