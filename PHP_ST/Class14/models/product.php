<?php
require_once './db.php';
class Product extends DBAccess {
    private $table = "products";
    
    function fetchAll() {
        return parent::read($this->table);
    }
    
    function fetchByLineName($line) {
        $line = mysqli_real_escape_string($this->connection, $line);
        //productLine = 'Motorcycles' so se navodnici;
        return parent::read($this->table, [], "productLine = '$line'");
    }
    
    function fetchOne($code) {
        $code = mysqli_real_escape_string($this->connection, $code);
        //productLine = 'Motorcycles' so se navodnici;
       $products = parent::read($this->table, [], "productCode = '$code'");
       return empty($products) ? [] : $products[0];
    }
 
    
    function update($id, $name, $desc, $price) {
        $id = mysqli_real_escape_string($this->connection, $id);
        $name = mysqli_real_escape_string($this->connection, $name);
        $desc = mysqli_real_escape_string($this->connection, $desc);
        $price = mysqli_real_escape_string($this->connection, $price);
        
        $query = "UPDATE $this->table SET ";
        $query .= "productName = '$name', productDescription = '$desc', buyPrice = $price ";
        $query .= "WHERE productCode = '$id'";
        
        $result = mysqli_query($this->connection, $query);
        
        if(!$result) {
            echo "Invalid query " . mysqli_error($this->connection);
        } else {
            return true;
        }
    }
}