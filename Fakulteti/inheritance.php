<?php
class Book {
    public $title;
    public $author;
    public $price;
    public $isbn;
    public $genre;
    
    public static $publishHouse = "Matica";
    
    function __construct($title, $author, $price, $isbn, $genre) {
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->genre = $genre;
    }
    function description(){
        return "Title $this->title by $this->author";
    }
    function getPrice(){
        return $this->price;
    }

}
class FictionBook extends Book {
    function __construct($title, $author, $price, $isbn) {
        parent::__construct($title, $author, $price, $isbn, "fiction");
    }
    function getPrice() {
        return $this->price + 20;
    }
}

class RomanceBook extends Book {
    function __construct($title, $author, $price, $isbn) {
        parent::__construct($title, $author, $price, $isbn, "romance");
    }
    function getPrice() {
        // 50% discount
        return $this->price - $this->price * 0.5;
    }
}

//$generalBook = Book("Php&Mysql", "sedc", 1000, "3253432", "development")

$harryPotter = new FictionBook("Harry Potter", "Emilija", 200, "12121");
echo $harryPotter->description();
echo "<br>";
echo $harryPotter->getPrice();
echo "<br>";
echo FictionBook::$publishHouse;
echo "<br>";

$rBook = new RomanceBook("50 Shades of grey", "Nekoj", 250, "1090112");
echo $rBook->getPrice();
echo "<br>";
echo $rBook->description();