<?php

class Book {
    public $title;
    public $autor;
    public $price;
    public $isbn;
    public $gerne;
    
    public static $publlishHouse = "Matica";
    
    function __construct($title, $author, $price, $isbn, $gerne) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->isbn = $isbn;
        $this->gerne = $gerne;
    }
    
    function description() {
        return"Title $this->title by $this->autor";
    }
    function getPrice() {
        return $this->price;
    }
}
class FictionBook extends Book {
    function __construct($title, $author, $price, $isbn) {
        parent:: __construct($title, $author, $price, $isbn, "fiction");
    }
    function getPrice() {
    return $this->price + 20; }
    
}
 
class RomanceBook extends Book {
    function __construct($title, $author, $price, $isbn) {
        parent:: __construct($title, $author, $price, $isbn, "romance");
    }
       function getPrice() {
           return $this->price - $this->price*0.5;
           
       } 
        
}
   
//$generalBook = Book("PHP & MySQL", "SEDC0", 1000, "54545", "development")
    $harryPotter = new FictionBook("Harry Potter","Emilija", 200, "12121");
            echo $harryPotter->description();
            echo $harryPotter->getPrice();
            echo $harryPotter->publishHouse;
     
  $rBook = new RomanceBook("50 shades of gray", "Nekoj", 150 , "65465465");
  
  echo $rBook->getPrice();
  