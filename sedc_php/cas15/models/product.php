<?php
require_once './db.php';
class Product extends DBAccess{
    private $table = 'products';
    
    function fetchAll(){
        return parent::read($this->table);
    }
    
    function fetchByLineName($line){
        $line = mysqli_real_escape_string($this->connection, $line);
        return parent::read($this->table, [], "productLine = '$line'");//''sporedi so strig ako e brojce ne treba
    } 
    
    function fetchOne($code){//zema od get parametar line 12 product.php cas 15
        $code = mysqli_real_escape_string($this->connection, $code);
        $products =  parent::read($this->table, [], "productCode = '$code'");
        //var_dump($products);//niza vo niza
        return empty($products) ? [] : $products[0];//ako nema product so toj code vrati prazna niza, ako ima vrati niza na nulta pozicija
    }
    
    function update($id, $name, $desc, $price){
        $id = mysqli_real_escape_string($this->connection, $id);
        $name = mysqli_real_escape_string($this->connection, $name);
        $desc = mysqli_real_escape_string($this->connection, $desc);
        $price = mysqli_real_escape_string($this->connection, $price);
        
        $query = "UPDATE $this->table SET ";
        $query .= " productName = '$name', productDescription = '$desc', buyPrice = '$price' ";//price moze i vo '' ama i ne mora
        //mora where inaku ke se update cela tabela
        $query .= "WHERE productCode = '$id'";
        
        $result = mysqli_query($this->connection, $query);
        
        if(!$result){
            echo "Invalid query" .mysqli_error($this->connection);
        } else {
            //var_dump(mysqli_affected_rows($this->connection));
            return true;
        }
    }
}