<?php

abstract class Book {
    public $title;
    public $author;
    public $price;
    public $isbn;
    public $gerne;
    public static $publishHouse = "Matica";
            function __construct($title, $author, $price, $isbn, $gerne) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->isbn = $isbn;
        $this->gerne = $gerne;
    }
  
    function description(){
        return "Title $this->title by $this->author";
        
    } 
    abstract function getPrice();
}
class FictionBook extends Book{
    function __construct($title, $author, $price, $isbn) {
       parent::__construct($title, $author, $price, $isbn, "fiction");
    }
    function getPrice(){
        return $this->price +20;
    }
}

class RomansBook extends Book{
    function __construct($title, $author, $price, $isbn) {
       parent::__construct($title, $author, $price, $isbn, "romance");
    }
    function getPrice() {
        return $this->price - $this->price*0.5;
    }
    
}
// $generalBook = Book("PHP $ MySQL", "SEDCO", 1000, "5436", "development");

$harryPotter = new FictionBook("Harry Potter", "Emilija", 200, "12122");
// var_dump($harryPotter);
echo $harryPotter-> description();
echo "<br>";
echo $harryPotter->getPrice();
echo "<br>";
echo FictionBook::$publishHouse;
echo "<br>";
$rBook = new RomansBook("50 shades of gray", "nekoj", 150, "435365");
echo $rBook->getPrice();
