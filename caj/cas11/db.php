<?php

    class DBAccess{
        const HOST = "localhost";
        const DB_USER = "root";
        const DB_PASS = "";
        const DB_NAME = "onlineshop";
        private $connection;
        
        function __construct(){
            $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
            if(mysqli_connect_errno()){
                throw new Exception("Cannot connect to database with MySQL" . mysqli_connect_error());
            } 
        }
        
        function readProductLines(){
            $query = "SELECT * FROM productlines";
            $result = mysqli_query($this->connection, $query);
            if(!$result){
                echo "Invalid query " . mysqli_error($this->connection);
            }
            else{
                $productLines = [];
                while($row = mysqli_fetch_assoc($result)){
                    $productLines[] = $row;
                }
                mysqli_free_result($result);
                return $productLines;
            }
        }
        
        function readProductByLineName($productLine){
            $productLine = mysqli_real_escape_string($this->connection, $productLine);
            $query = "SELECT * FROM products WHERE productLine = '$productLine'";
            $result = mysqli_query($this->connection, $query);
            if(!$result){
                echo "Invalid query " . mysqli_error($this->connection);
            }
            else{
                $products = [];
                while($row = mysqli_fetch_assoc($result)){
                    $products[] = $row;
                }
                mysqli_free_result($result);
                return $products;
            }
        }
        
        function __destruct() {
            mysqli_close($this->connection);
        }
    }

?>