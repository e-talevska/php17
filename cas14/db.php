<?php
class DBAccess {
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    protected $connection;


    function __construct() {
        $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
         // if error occured       
        if(mysqli_connect_errno()) {
             throw new Exception("Cannot connect with MySql" . mysqli_connect_error());     
        }    
    }
 
//    function readProductLines(){
//        $query = "SELECT * from productlines";
//        $result = mysqli_query($this->connection, $query);
//        if(!$result){
//            echo "Invalid Query". mysqli_errno($this->connection);
//        } else {
//            $productLines =[];
//            while($row = mysqli_fetch_assoc($result)){
//            $productLines[] = $row;
//            }
//            mysqli_free_result($result);
//            return $productLines;
//        }
//        
//    }
        //$columns = [title , id , name];
    function read($table, $columns = [], $where = ''){
        //if columns is empty array, select everything
        //otherwise select the specified columns
        if(empty($columns)){
            $select = "*";
        } else {
            $select = implode(",", $columns);
        }
        $query = "SELECT $select ";
        $query .= "FROM $table ";
        //if where is set, add the condition to the $query        
        if($where != ''){
           $query .= "WHERE $where";
        }
        $result = mysqli_query($this->connection, $query);
        if(!$result){
            echo "Invalid Query". mysqli_errno($this->connection);
        } else {
            $resultArray = [];
            while($row = mysqli_fetch_assoc($result)){
                $resultArray[] = $row;
            }
            mysqli_free_result($result);
            return $resultArray;
        }
    }
            
//    function reaadProductsByLineName($productLine){
//        $productLine = mysqli_real_escape_string($this->connection, $productLine);
//        $query = "SELECT * FROM products WHERE productLine = '$productLine'";
//        $result = mysqli_query($this->connection, $query);
//        if(!$result){
//            echo "Invalid Query". mysqli_errno($this->connection);
//        } else {
//            $products =[];
//            while($row = mysqli_fetch_assoc($result)){
//            $products[] = $row;
//            }
//            mysqli_free_result($result);
//            return $products;
//        }
//    }  
    
    function __destruct() {
        mysqli_close($this->connection);
    }
    
}

//$query = "SELECT * FROM productlines JOIN products on productlines.productLine = products.productLine";