<?php

class Book {
    
    public $title;
    public $author;
    public $price;
    public $isbn;
    public $gerne;
    
    public static $publishHouse = "Matica";//nema dr izdavacki kuki
    
    function __construct($title, $author, $price, $isbn, $gerne){
        
        $this ->title = $title;//smesti vo propertie title
        $this ->author = $author;
        $this ->price = $price;
        $this ->isbn = $isbn;
        $this ->gerne = $gerne;
    }
    
  
    
    
    function description(){//i funkciite mozat so private, protected po default se public
        
       return "Title $this->title by $this->author."; 
    }
    
    function getPrice(){//abstract metod i samata class e abstract
        
        return $this->price;//vrati cena na knigata//nema telo ako e abstract ova nema da postoi
    }

}

class FictionBook extends Book {//ke gi nasledi site metodi i propertie so se public i protected od class Book
    
    function __construct($title, $author, $price, $isbn){//ako nema def od parent
        
        parent::__construct($title, $author, $price, $isbn, "fiction");
        //povikaj go construct na parent
        //ako go nema se setiraat site vrednosti ke se null, se pravi overriding, prepokrivanje
        //ili da se kopiraat vrednostite od construc ama nema potreba ekslpicitno se povikuva construct na parent
        //mora da ima i zanr, mora site atributi da se ispratat
    }
    function getPrice(){
        
        return $this->price + 20;//plus 20 poveke na cenata
    }
    
}

class RomanceBook extends Book {//ako nma construc od parent
    
    function __construct($title, $author, $price, $isbn){//ako nema def od parent
        
        parent::__construct($title, $author, $price, $isbn, "romance");

    }
    
    function getPrice(){
        
        return $this->price - $this->price*0.5;//50% poeftino
    }
    
}
//$generalBook = Book ("Php & MySql", "SEDC", 1000, "123456", "development");//nema da fun so abstract
//za da se zabrani instanca od parent class abstract
//metod abstract ne mora da ima telo, sekoj child ke si odluci kako ke presmetuva cenata avtomatski i class e absract
$harryPotter= new FictionBook("Harry Potter", "Emilija", 200, "12121" );//nema potreba od zanr veke e fuctionBook
echo $harryPotter ->description();//vraka sega description
echo "<br>";
echo $harryPotter ->getPrice();//getPrice(); vraka cena 
//var_dump($harryPotter);
echo "<br>";
$rBook = new RomanceBook("50 shades of gray", "Nekoj", 150, "123548");
echo $rBook ->getPrice();
echo "<br>";
echo FictionBook::$publishHouse;//static