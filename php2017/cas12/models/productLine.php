<?php

require_once './conectingDB.php';
class productLine extends DBAccess{
    private $table = "productlines";
            
    function fetchAll(){
        return parent::read($this->table);
    }
}