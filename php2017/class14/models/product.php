<?php
require_once './db.php';
class Product extends DBAccess {
    private  $table = "products";
    
    function fetchAll () {
        return parent::read($this->table);
    }
    function fetchByLineName($line) {
        $line = mysqli_real_escape_string($this->conection,$line);
        return parent::read($this->table, [], "productLine = '$line'");
    }
    function fetchOne($code) {
        $line = mysqli_real_escape_string($this->conection,$code);
        $products = parent::read($this->table, [], "productCode = '$code'");
        return empty($products) ? [] : $products[0];
 } 
 function update($id, $name, $desc, $price) {
     $id = mysqli_real_escape_string($this->conection, $id);
     $name = mysqli_real_escape_string($this->conection, $name);
     $desc = mysqli_real_escape_string($this->conection, $desc);
     $price = mysqli_real_escape_string($this->conection, $price);
     
     $query = "UPDATE $this->table SET";
     $query .= " productName = '$name', productDescription = '$desc', buyPrice = $price ";
     $query .= "WHERE productCode = '$id'";
     
     $result = mysqli_query($this->conection, $query);
     
     if(!$result) {
         echo "Invalid query" . mysqli_error($this->conection);
         
     } else {
         return true;
     }
 }
}
