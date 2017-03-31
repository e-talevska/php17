<?php

class Book {
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
            
    function description() {
        return "Title $this->title by $this->author ";
    }
    function getPrice() {
        return $this->price;
    }
}

class FictionBook extends Book {
      function __construct($title, $author, $price, $isbn) { 
          parent::__construct($title, $author, $price, $isbn, "fiction");
    }
    function getPrice() {
        return $this->price +20;
    }
}
class RomanceBook extends Book {
       function __construct($title, $author, $price, $isbn) { 
          parent::__construct($title, $author, $price, $isbn, "romance");
    }     
    function getPrice() {
        //50% discount
        return $this->price - $this->price*0.5;
    }
}

//$generalBook = Book("PHP & MySQL", "SEDC", 1000, "54545", "development");

$harryPotter = new FictionBook("Harry Potter", "Emilija", 200, "12121");
echo $harryPotter->description();
echo $harryPotter->getPrice();
echo "<br/>";
echo FictionBook::$publishHouse;
echo "<br/>";

$rBook = new RomanceBook("50 shades of gray", "Nekoj", 150, "323232");
echo $rBook->getPrice();