<?php
    class Book{
        var $title;
        var $author;
        var $price;
        var $isbn;
        var $genre;
        
        public static $publisher = "Ohrid";
        
        function __construct($title, $author, $price, $isbn, $genre){
            $this->title = $title;
            $this->author = $author;
            $this->price = $price;
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
    
    class FictionBook extends Book{
        function __construct($title, $author, $price, $isbn) {
            parent::__construct($title, $author, $price, $isbn, "Fiction");
        }
        function getPrice() {
            return $this->price + 20;
        }
    }
    
    class RomanceBook extends Book{
        function __construct($title, $author, $price, $isbn) {
            parent::__construct($title, $author, $price, $isbn, "Romance");
        }
        function getPrice() {
            // 50% Discount
            return $this->price - $this->price * 0.5;
        }
    }

    $harryPotter = new FictionBook("Harry Potter", "Mitko J.", 50, 121);
    $love = new RomanceBook("Love is in the Air", "Mitko J", 99, 122);
    
    echo $harryPotter->description();
    echo $harryPotter->getPrice();
    echo $love->getPrice();
    echo "<pre>";
    var_dump($harryPotter);
    var_dump($love);

    $generalBook = new Book("PHP & MySQL", "SEDC", 11, 22, "Development");
    var_dump($generalBook);
    echo "</pre>";
    echo Book::$publisher;
    
?>