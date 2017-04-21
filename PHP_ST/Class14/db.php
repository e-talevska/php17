<?php
class DBAccess {
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    protected $connection;
            
    function __construct() {
        $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
        //if error occured we are entering in if condition, else no error
        if(mysqli_connect_errno()) {
            throw new Exception("Cannot connect with MySQL" . mysqli_connect_error());
        }
    }
    
    //$columns = ['title', 'id', 'name'];
    
    function read($table, $columns=[], $where = '') {
      //if $columns is empty array, select everything, otherwise select the specified columns;
        if(empty($columns)) {
            $select = "*";
        } else {
            $select = implode(",", $columns);
        }
        $query = "SELECT $select ";
        $query .="FROM $table ";
        // if where is set than add the condition to the query
        if($where !='') {
            $query .="WHERE $where";
        }

        $result = mysqli_query($this->connection, $query);
        if (!$result) {
            echo "Invalid query" . mysqli_errno($this->connection);
            
        } else {
        $resultArray = [];
        While($row = mysqli_fetch_assoc($result)) {
            $resultArray[] = $row;
        }
        mysqli_free_result($result);
        return $resultArray;
        }
    }
            
    function readProductLines() {
        $query = "SELECT * FROM productlines";
        $result = mysqli_query($this->connection, $query);
        if(!$result) {
            echo "Invalid query " . mysqli_error($this->connection);
        } else {
            $productLines = [];
            while($row = mysqli_fetch_assoc($result)){
              $productLines[] = $row;  
            }
            mysqli_free_result($result);
            return $productLines;
        }
    }
    
  
            
            function __destruct() {
        mysqli_close($this->connection);
    }
}