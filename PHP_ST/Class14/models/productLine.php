<?php
require_once './db.php';
class ProductLine extends DBAccess {
    private $table = "productlines";
    
    //overwrite parent's method
    function fetchAll() {
       return parent::read($this->table);
    }
}