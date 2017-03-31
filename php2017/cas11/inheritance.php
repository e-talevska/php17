<?php
class Book{
    public $title;
    public $author;
    public $price;
    public $isbn;
    public $genre;
    
    public static $publishHouse = "matica";
            
    function __construct($title,$author,$price,$isbn,$genre) {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
        $this->isbn = $isbn;                
    }
            
    function description(){
        return "Title $this->title by $this->author";
    }
    function getPrice(){
        return $this->price;
    }
}
class FictionBook extends Book{
    function __construct($title, $author, $price, $isbn) {
        parent::__construct($title, $author, $price, $isbn, "fiction");
    }
    function getPrice() {
        return $this->price + 20;
    }
}

class RomanceBook extends Book{
    function __construct($title, $author, $price, $isbn) {
        parent::__construct($title, $author, $price, $isbn, "romance");
    }
    function getPrice() {
        //-50 procenti
        return $this->price - $this->price*0.5;
    }
}

$harryPoter = new FictionBook("harryPoter", "toni", 200, '1234543');

echo $harryPoter->description();
echo $harryPoter->getPrice()."<br>";

$rBook = new RomanceBook("50 shades of grey", "nekoj", 150, "23452345");
echo $rBook->getPrice();
    