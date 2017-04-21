<?php

class DBAccess{
    const HOST = "localhost";//konstanti//realno ne se menuvaat ima samo edna baza edna konekcija isto kako DEFINE
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    protected $connection;//ke se koristi vo klasite koi ke nasleduvaat
    
    function __construct(){
        $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
        //se pristapuva preku imeto na class / port 3306
        if(mysqli_connect_errno()){//dali ima greska / 0 ako nema greska / ako se sluci greska ke vleze vo if
            throw new Exception("Cannot connect with MySql" . mysqli_connect_error());
            //dokolku se sluci da se napravi nes dr // treba vo try catch blok -> index.php
        }
    }
    
    //$columns = ['title', 'id', 'name'];
    function read($table, $columns = [], $where = ''){ 
        //if column is empty array, select everything
        //otherwise select the specified columns
        if(empty($columns)){
            $select = "*";   
        } else {
            $select = implode(",",$columns);
        }
        $query = "SELECT $select ";//mora space 
        $query .= "FROM $table ";//mora space prodolzuva query
        //if where isset, add the condition to the query
        if($where != ''){
            $query .= "WHERE $where";//. na ona sto veke stoi vo query dodadi go ova
        }
        //echo $query;
        $result = mysqli_query($this->connection, $query);
        if(!$result){
            echo "Invalid query" .mysqli_error($this->connection);
        } else {
            $resultArray = [];
                while ($row = mysqli_fetch_assoc($result)){//kol ke se klucevi a vred soodvetno so vrednostite
                    $resultArray [] = $row;
                }
            mysqli_free_result($result);
            return $resultArray;
           }
    }

    function __destruct(){
        mysqli_close($this->connection);
    }
}