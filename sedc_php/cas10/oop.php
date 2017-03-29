<?php
//$student1 = ['Marija', 'Zdravkova','matematika'];
//$student2 = ['Goran', 'Kostadinov', 'Php'];

//echo "Studentot so ime $student1[0] i prezime $student1[1] go slusna predmetot $student1[2].<br>";
//echo "Studentot so ime $student2[0] i prezime $student2[1] go slusna predmetot $student2[2].";

class Student{  //mora golema bukva da se razlikuva
    var $firstName;
    var $lastName;
    var $subjects;//properties so ke gi imaat objektite
    var $dob;
    
    function __construct($firstName, $lastName, $subjects){//se povikuva so samoto kreiranje na objektot
        echo "Constructor called<br>";
        $this ->firstName = $firstName;//se odnesuva na objektot koj vo momentot se kreira
        $this ->lastName = $lastName;//ne se koristi nadvor od class
        $this ->subjects = $subjects;
    }
    
    function __destruct(){//pecati najdole, zavrsuva skriptata i poradi toa destructorot e na krajot i nema niso po nego
        echo "Destructor called<br>";
    }
    
    function intro (){//
        echo "I am {$this->firstName} {$this->lastName} and my subjects are "
        .implode (", ",$this->subjects)//bidejki e niza mora string go deli vo lista odvoeni so zapirka
            .".<br>";
    }
}
$student1 = new Student("Emilija", "Talevska", ['php', 'mysql', 'javascript']);//kreiranje na objekt 
//construct se povikuva mora da ima parametar
//$student1 -> firstName = "Emilija";//pristap do promenlivata firstName
//$student1 -> lastName = "Talevska";//moze da gi menuvame da bide Doe
//$student1 -> subjects = ['php', 'mysql', 'javascript'];
//$student1 -> dob = 25;
$student1 -> intro();

$student2 = new Student("John", "Doe",['math', 'html', 'css'] );//kreiranje na objekt //construct se povikuva mora da ima parametar
//$student2 -> firstName = "John";//pristap do promenlivata firstName
//$student2 -> lastName = "Doe";
//$student2 -> subjects = ['math', 'html', 'css'];
$student2 -> intro();

//var_dump($student1, $student2);//destroy objects //racno bez destructorot
unset($student1, $student2);
echo "End<br>";//go pecati bidejki racno unistuvame objecti