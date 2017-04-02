<?php

    class Car{
        var $name;
        var $title;
        var $price;
        var $engine;
        
        function __construct($name, $title, $price, $engine){
            $this->name = $name;
            $this->title = $title;
            $this->price = $price;
            $this->engine = $engine;
        }
        
        function carDetails(){
            $this->price = number_format($this->price);
            return "Your $this->name price is $this->price and engine power is $this->engine";
        }
        
        function discount(){
            if($this->price > 15000){
                // Discount 10%
                return $this->price = $this->price - $this->price * 0.1;
            }
        }
    }
    
    class Bodykit extends Car{
        function __construct($name, $title, $price, $engine){
            parent::__construct($name, $title, $price, $engine, "Sport");
        }
        
        function getSportPrice(){
            return $this->price + $this->price * 20;
        }
    }

    $car = new Car($_POST['car'], $_POST['title'], $_POST['price'], $_POST['engine']);
    $supercar = new Bodykit($_POST['car'], $_POST['title'], $_POST['price'], $_POST['engine']);
    
    echo "Car with sport bodykit price is " . $supercar->getSportPrice();
    echo "<br>";
    echo "If your car price is higher than 15,000$ you have discount and price is " . $car->discount();
?>