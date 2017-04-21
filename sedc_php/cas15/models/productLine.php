<?php
require_once './db.php';//./ citaj od root
class ProductLine extends DBAccess{
    private $table = "productlines";//imeto na tabelata
    
    function fetchAll(){
        return parent::read($this->table);
    }
}
