<?php
class DBAccess {
    const HOST = "localhost";
    const DB_USER = "root";
    const DB_PASS = "";
    const DB_NAME = "onlineshop";
    protected $connection;

    function __construct() {
        $this->connection = mysqli_connect(DBAccess::HOST, DBAccess::DB_USER, DBAccess::DB_PASS, DBAccess::DB_NAME);
        //if error occured
        if(mysqli_connect_errno()) { 
            throw new Exception("Cannot connect with MySQL " . mysqli_connect_error());
        }
    }
    /**
     * $columns = ['title', 'id', 'name'];
     */
    function read($table, $columns = [], $where = '') {
        //if $columns is empty array, select everything
        //otherwise select the specified columns
        if(empty($columns)) {
            $select = "*";
        } else {
            $select = implode(",", $columns);
        }
        $query = "SELECT $select ";
        $query .= "FROM $table ";
        //if where is set, add the condition to the query
        if($where != '') {
            $query .= "WHERE $where";
        }

        $result = mysqli_query($this->connection, $query);
        if(!$result) {
            echo "Invalid query " . mysqli_error($this->connection);
        } else {
            $resultArray = [];
            while($row = mysqli_fetch_assoc($result)) {
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
