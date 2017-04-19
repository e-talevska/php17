<?php

class DBAccess{
    const HOST = "localhost";//konstanti//realno ne se menuvaat ima samo edna baza edna konekcija isto kako DEFINE
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    private $connection;
    
    function __construct(){
        $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
        //se pristapuva preku imeto na class / port 3306
        if(mysqli_connect_errno()){//dali ima greska / 0 ako nema greska / ako se sluci greska ke vleze vo if
            throw new Exception("Cannot connect with MySql" . mysqli_connect_error());
            //dokolku se sluci da se napravi nes dr // treba vo try catch blok -> index.php
        }
    }
    
    function readProductLines(){
        $query = "SELECT * FROM productlines";//mora space
        $result = mysqli_query($this->connection, $query);//ili false ili mnozestvo od elementi
        if(!$result){
            echo "Invalid query" .mysqli_error($this->connection);
        } else {
            //var_dump(mysqli_fetch_row($result));//zemi eden red od ovoj rezultat
            //ako se povika use ednas ke go cita sledniot nov red
            //var_dump(mysqli_fetch_assoc($result)); //asocijativna niza od eden red isto
            $productlines = [];
            while($row = mysqli_fetch_assoc($result)){//samo se pomestuval kursorot
                $productLines[] = $row;
            }
            mysqli_free_result($result);//oslobodi go $result smesti vo moja niza
            return $productLines;
        }
    }
    
    function readProductByLineName($productLine){
        $productLine =mysqli_real_escape_string($this->connection, $productLine);//da se eskejpira za da nema atack
        $query = "SELECT * FROM products WHERE productLine = '$productLine'";
        //ako ima promeliva vo query (nesto so se menuva) mora da se iscisti, da se isfiltrira, eskejpira
        //SQL injection // 
        $result = mysqli_query($this->connection, $query);//ili false ili mnozestvo od elementi
        if(!$result){
            echo "Invalid query" .mysqli_error($this->connection);
        } else {
            //var_dump(mysqli_fetch_row($result));//zemi eden red od ovoj rezultat
            //ako se povika use ednas ke go cita sledniot nov red
            //var_dump(mysqli_fetch_assoc($result)); //asocijativna niza od eden red isto
            $products = [];
            while($row = mysqli_fetch_assoc($result)){//samo se pomestuval kursorot
                $products[] = $row;
            }
            mysqli_free_result($result);//oslobodi go $result smesti vo moja niza
            return $products;
        }
    }
    
    function __destruct(){
        mysqli_close($this->connection);
    }
}