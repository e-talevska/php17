<?php

class DBAccess{
    
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    private $conection;
    function __construct() {
        $this->conection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
        //ako se slucila nekoja greska ke vlezeme vo uslovot
        if(mysqli_connect_errno()){
            throw new Exception("cannot connect with MySQL" . mysqli_connect_error());
        }
    }
    
    function readProductLines(){
        $query = "SELECT * FROM productlines";
        $result = mysqli_query($this->conection, $query);
        if(!$result){
            echo "invalid query ".  mysqli_error($this->conection);
        }  else {
            $productLines = [];            
            while ($row = mysqli_fetch_assoc($result)){
                $productLines[] = $row; 
            }
            mysqli_free_result($result);
            return $productLines;
        }  
    }
    
    function readProductsByLineName($productLine){
        $productLine = mysqli_real_escape_string($this->conection,$productLine);
        $query = "SELECT * FROM products WHERE productLine = '$productLine'";
        $result = mysqli_query($this->conection, $query);
         if(!$result){
            echo "invalid query ".  mysqli_error($this->conection);
        }  else {
            $products = [];            
            while ($row = mysqli_fetch_assoc($result)){
                $products[] = $row; 
            }
            mysqli_free_result($result);
            return $products;
        }
        
    }
            
    function __destruct() {
        mysqli_close($this->conection);
    }
}

