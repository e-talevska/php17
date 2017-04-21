<?php

    class DBAccess{
        const HOST = "localhost";
        const DB_USER = "root";
        const DB_PASS = "";
        const DB_NAME = "onlineshop";
        protected $connection;
        
        function __construct(){
            $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
            if(mysqli_connect_errno()){
                throw new Exception("Cannot connect to database with MySQL" . mysqli_connect_error());
            } 
        }
        
        function read($table, $columns = [], $where = ""){
            if(empty($columns)){ // Select *
                $select = "*";
            }
            else{
                $select = implode(",", $columns);
            }
            $query = "SELECT $select ";
            $query .= "FROM $table ";
            if($where != ""){
                $query .= "WHERE $where";
            }
            
            $result = mysqli_query($this->connection, $query);
            if(!$result){
                echo "Invalid query " . mysqli_error($this->connection);
            }
            else{
                $resultArray = [];
                while($row = mysqli_fetch_assoc($result)){
                    $resultArray[] = $row;
                }
                mysqli_free_result($result);
                return $resultArray;
            }
        }
        
        function __destruct() {
            mysqli_close($this->connection);
        }
    }

?>